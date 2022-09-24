// import ApolloClient from 'apollo-boost';
// import { InMemoryCache } from 'apollo-cache-inmemory';
// import { createHttpLink } from 'apollo-link-http';
// import { ApolloProvider } from '@apollo/react-hooks';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Nav from './Nav/Nav';
// import Products from './Product/index';
import Dashboard from './Admin/Dashboard';
import Customer from './Customer';
import NewCustomer from './Customer/NewCustomer/NewCustomer';
import MeasurementList from './Admin/Measurement/MeasurementList';
import NewMeasuremen from './Admin/Measurement/NewMeasurement';
import DragableList from './dragableList';
import UserList from './Admin/User/UserList';
import Login from './Admin/Auth/Login';
import Signup from './Admin/Auth/Signup';

import { AuthProvider } from './context/AuthContext';
import AuthRoute from './route/AuthRoute';
import ProtectedRoutes from './route/ProtectedRoutes';
import useAuth from './hooks/useAuth';
import EditCustomer from './Customer/NewCustomer/EditCustomer';
import EditMeasuremen from './Admin/Measurement/EditMeasurement';
import client from './../apolloClient';

const Main = () => {
  return (
      <AuthProvider>
        {/* <MainCard /> */}
        <BrowserRouter>
          {/* <DragableList /> */}
          <Nav />
          <Routes>
            <Route path="/" element={<Home />} />

            <Route element={<ProtectedRoutes />}>
              <Route path="/dashboard" element={<Dashboard />} />
              <Route path="/customer">
                <Route path="" element={<Customer />} />
                <Route path="new" element={<NewCustomer />} />
                <Route path="edit/:id" element={<EditCustomer />} />
              </Route>

              <Route path="/dashboard/measurement">
                <Route path="" element={<MeasurementList />} />
                <Route path="new" element={<NewMeasuremen />} />
                <Route path="edit/:id" element={<EditMeasuremen />} />
              </Route>
              <Route path="/user" element={<UserList />} />
            </Route>
            <Route element={<AuthRoute />}>
              <Route path="/login" element={<Login />} />
              <Route path="/signup" element={<Signup />} />
            </Route>
          </Routes>
        </BrowserRouter>
      </AuthProvider>
  );
};
export default Main;

function Home() {
  const { logout } = useAuth();
  return (
    <>
      <h3>Home</h3>
      <p>
        <button onClick={logout}>Logout</button>
      </p>
    </>
  );
}
