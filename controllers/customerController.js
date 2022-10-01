import Customer from '../models/User.js';
import customerServices from '../services/userCustomerServices.js';
import mg from 'mongoose';
import customerValidation from '../validation/customerValidation.js';
import errorHandler from '../utils/errorHandler.js';
// import auth from '../auth/auth.js';
import { ApolloError, AuthenticationError, UserInputError } from 'apollo-server';

export default {
  /**
   * Create New Customer
   */
  createCustomer: async (_parent, { customer }, { req, res, isAuthorized }) => {
    try {
      // console.log(isAuthorized);
      if (!isAuthorized)
        throw new AuthenticationError(`Unauthorized`, {
          errors: { message: `Unauthorized user` },
        });
      if (!req?.user?.id) throw ApolloError(`Server Error Occered!`);
      await customerValidation.newCustomerValidation(customer);
      const newCustomerData = customer;
      if (!newCustomerData?.engage?.[0]?.length) newCustomerData.engage = [];
      const newCustomer = new Customer({
        ...newCustomerData,
        user: req?.user?._id || req?.user?.id,
      });
      const saved = await newCustomer.save();
      // console.log(customData.user.name);
      return newCustomer;
    } catch (e) {
      return errorHandler(e);
    }
  },
  /**
   * All Customers
   */
  allCustomers: async (
    _parent,
    { key, value },
    { req, res, currentUser, isAuthorized }
  ) => {
    try {
      // const user = await auth.userAuthorization(req);
      if (!isAuthorized) throw new ApolloError(`Internal server error`);
      const filter =
        key && value
          ? { [key]: { $in: value.split('|') } }
          : { roles: { $in: ['CUSTOMER'] } };
      // console.log(filter);
      const all = await customerServices.findUser(filter);
      return all;
    } catch (e) {
      throw new UserInputError(e);
    }
  },
  /**
   * Single Customer
   */
  getCustomer: async (_parent, { key, value }, { req, res }) => {
    try {
      if (!mg.isValidObjectId(value))
        throw new UserInputError(`Invalid customer id`);
      return await Customer.findById(value);
    } catch (e) {
      throw new UserInputError(e);
    }
  },
  /**
   * Update Customer
   */
  updateCustomer: async (
    _parent,
    { id, update },
    { req, res, isAuthorized }
  ) => {
    try {
      if (!isAuthorized)
        throw new AuthenticationError(`Unauthorized`, {
          errors: { message: `Unauthorized user` },
        });
      await customerValidation.updateCustomerValidation({ id, ...update });
      const updated = await Customer.findByIdAndUpdate(id, update, {
        new: true,
      });
      return updated;
    } catch (e) {
      errorHandler(e);
    }
  },
  /**
   * Delete Customer
   */
  deleteCustomer: async (_parent, { id: _id }) => {
    try {
      if (!mg.isValidObjectId(_id))
        throw new UserInputError(`Invalid delete id`);
      const del = await Customer.deleteOne({ _id });
      console.log(del);
      return del.deletedCount;
    } catch (e) {
      throw new UserInputError(e);
    }
  },
};

// Customer.findByIdAndUpdate(
//   '6324efa9255bce344100a4da',
//   {
//     name: 'Abu Taher',
//     phone_no: '01962054585',
//     status: 'ACTIVE',
//     roles: 'rfjdkfjd',
//     email: 'abutaher267@gmail.com',
//     address: 'malia',
//     order_status: 'PROCESSING',
//     delivery_detail: {
//       delivery_by: 'SA Paribabon',
//       delivery_charge: 120.0,
//       location: 'Malia',
//       delivery_phone: '01962054585',
//     },
//   },
//   { new: true }
// )
//   .then((d) => console.log(d))
//   .catch((e) => console.log(e));
// Customer.create({
//   name: 'Abu Taher',
//   phone_no: '01962054585',
//   email: 'supremetaher@gmail.com',
//   address: 'malia',
//   Customer: '6324efa9255bce344100a4da',
//   delivery_detail: {
//     delivery_by: 'SA Paribabon',
//     delivery_charge: 120.0,
//     location: 'Malia',
//     delivery_phone: '01962054585',
//   },
// })
//   .then((d) => console.log(d))
//   .catch((e) => console.log(e));
