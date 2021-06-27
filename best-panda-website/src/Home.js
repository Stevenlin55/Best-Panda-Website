import React, { Component } from 'react'
import { Navbar, Nav } from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.css';
import Menu from './components/Menu.js'
import FAQ from './components/FAQ.js'
export default class Home extends Component {
  render() {
    return (
      
      <div>
         <Navbar bg="dark" variant="dark">
          <Navbar.Brand href="#home">Best Panda</Navbar.Brand>
          <Nav className="mr-auto">
            <Nav.Link href="/Home">Home</Nav.Link>
            <Nav.Link href="/Menu">Menu</Nav.Link>
            <Nav.Link href="/FAQ">FAQ</Nav.Link>
          </Nav>
        </Navbar>
     
      </div>
    )
  }
}
