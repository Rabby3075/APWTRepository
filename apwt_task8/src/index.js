import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
 import App from './App';
import reportWebVitals from './reportWebVitals';
import Nav from './Components/Nav';
import ShowInfo from './Components/ShowInfo';
import CustomerLogin from './Components/CustomerLogin';
import 'bootstrap/dist/js/bootstrap.bundle.min';
//import 'bootstrap-icons/font/bootstrap-icons.css';
import Home from './Components/Homepage/Home';
import CustomerNavbar from './Components/Navbar/CustomerNavbar';

import {BrowserRouter as Router, Route, Routes} from 'react-router-dom'


const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>
     <Router>

      <Routes>
        <Route exact path='/' element={<App/>} />
        <Route exact path='/laravelInfo' element={<ShowInfo/>} />
        <Route exact path='/Login' element={<CustomerLogin/>} />
        <Route exact path='/Home' element={<Home/>} />
        <Route exact path='/nav' element={<CustomerNavbar/>} />
        
      </Routes>

    </Router>
  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
