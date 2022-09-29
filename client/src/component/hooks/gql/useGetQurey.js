import { useQuery } from '@apollo/client';
import Actions from '../../graphql/Actions';

export default function useGetQurey(QRY, variables, back) {
  const { loading, data, error } = useQuery(Actions[QRY], {
    variables: {
      ...variables,
    },
  });
  return {
    data: back ? data?.[back] || data : data,
    loading,
    error,
  };
}
