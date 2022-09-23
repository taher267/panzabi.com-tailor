export const errorConversion = (err) => {
  let newError =
    err.graphQLErrors[0]?.extensions?.exception?.stacktrace[0].split(
      'UserInputError: '
    )[1];
  if (newError?.split('ValidationError: ')?.[1]?.length) {
    newError = newError?.split('ValidationError: ')?.[1];
  }
  let strToObj = {};
  if (newError) {
    newError = newError.split('!');
    for (const item of newError) {
      let arr = item.split(':');
      if (arr[1]) {
        strToObj[arr[0].replace(/\s|'|,/g, '')] = arr[1];
      }
    }
  }
  return strToObj;
};

export const errorFormat = (e) => {
  const exc = e?.graphQLErrors?.[0]?.extensions;
  if (exc?.errors) return exc.errors;
  return {
    message:
      exc?.errors?.message || e?.message?.length
        ? e?.message
        : `Internal fetching error`,
  };
};
