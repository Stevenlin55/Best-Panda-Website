import React, { Component } from 'react'

import 'bootstrap/dist/css/bootstrap.css';

import { BrowserRouter, Route } from 'react-router-dom';
import Header from './components/Header.js';
import Home from './components/Home';
import Menu from './components/Menu';
import FAQ from './components/FAQ';

export default class App extends Component {
  render() {
    return (
      
      <div>
       <BrowserRouter>
            <Header />
            <div className="container mt-3">
              <Route path="/" exact component={Home} />
              <Route path="/menu" exact component={Menu}  />
              <Route path="/faq" exact component={FAQ} />  
            </div>
          </BrowserRouter>
     
      </div>
    )
  }
}
