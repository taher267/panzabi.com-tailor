import { UserInputError } from 'apollo-server';
import templateServices from '../services/templateServices.mjs';
import errorHandler from '../utils/errorHandler.mjs';
import Joi from 'joi';

const newTemplateValidation = async (payload) => {
  // try {
  const schema = Joi.object({
    name: Joi.string().trim().alphanum().min(10).max(20).required(),
    templateBody: Joi.string().trim().min(100).required(),
  });
  let { error } = schema.validate(payload, { abortEarly: false });

  // error throw
  if (!error) return true;
  throw new UserInputError(`Failed to create template`, {
    // errors: error.details,
    errors: error.details?.reduce(
      (a, { message, context: { key, limit }, type }) => ({
        ...a,
        [key]: { message, type, key, limit },
      }),
      {}
    ),
    status: 400,
  });
  // } catch (e) {
  //   errorHandler(e);
  // }
};

const designUpdateValidation = async ({ id, sl_id, name }) => {
  let errors = {};
  try {
    //name
    if (!name) errors.name = `Name is mandatory!`;
    else if (name.length < 2) errors.name = `Name at least 2 chars`;
    else if (name) {
      const check = await designServices.findMeasurement('name', name);
      if (check && check?.id !== id) errors.name = `Name is already exists!`;
    }
    // Serial id
    if (!sl_id) errors.sl_id = `Serial id is mandatory!`;
    else if (sl_id < 0) errors.sl_id = `Invalid serial id`;
    else if (sl_id) {
      const check = await designServices.findMeasurement('sl_id', sl_id);
      if (check && check?.id !== id)
        errors.sl_id = `Serial id is already exists!`;
    }

    // error throw
    if (!Object.keys(errors).length) return true;
    throw new UserInputError(
      `A number's of errors cought on ${Object.keys(errors).join(', ')}`,
      { errors }
    );
  } catch (e) {
    errorHandler(e);
  }
};
export default { newTemplateValidation, designUpdateValidation };
