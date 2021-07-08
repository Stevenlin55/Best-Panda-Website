import React, { Component } from 'react'

import { BrowserRouter, Route } from 'react-router-dom';
import Header from './components/Header.js';
import Home from './components/Home';
import Menu from './components/Menu';
import FAQ from './components/FAQ';
import Footer from './components/Footer'
import './styles.css'
export default class App extends Component {
  render() {
    return (
      
      <div>
       <BrowserRouter>
            <Header />
            <div className="container body">
              <Route path="/" exact component={Home} />
              <Route path="/menu" exact component={Menu}  />
              <Route path="/faq" exact component={FAQ} />  
            </div>
            <Footer />
          </BrowserRouter>
     
      </div>
    )
  }
}
