import React, { Component } from "react";

import { Link } from "react-router-dom";
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap/js/src/collapse.js";
import logo from "./logo.png";
import "../styles.css";
export default class Header extends Component {
  state = {
    number: 0,
  };
  click() {
    let currentNum = this.state.number;
    currentNum++;
    this.setState({ number: currentNum });
    console.log(this.state.number);
  }
  render() {
    return (
      <div>
        <nav className="navbar navbar-expand-lg navbar-light bg-success">
          <div className="container-fluid">
            <Link className="navbar-brand logo-and-name" to="/">
              <img
                src={logo}
                alt="Logo"
                width="50"
                height="52"
                className="d-inline-block align-text-top"
              />
            </Link>
            <button
              className="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span className="navbar-toggler-icon"></span>
            </button>
            <div
              className="collapse navbar-collapse"
              id="navbarSupportedContent"
            >
              <ul className="navbar-nav me-auto mb-2 mb-lg-0">
                <li className="nav-item">
                  <Link className="nav-link" to="/">
                    Home
                  </Link>
                </li>
                <li className="nav-item">
                  <Link className="nav-link" to="/menu">
                    Menu
                  </Link>
                </li>
                <li className="nav-item">
                  <Link className="nav-link" to="/faq">
                    FAQ
                  </Link>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    );
  }
}
