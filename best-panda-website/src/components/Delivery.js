import React, { Component } from "react";
import GrubHub from "./grubhub-logo.png";
import DoorDash from "./doordash-logo.png";
export default class Delivery extends Component {
  render() {
    return (
      <div>
        <div className="p-5 mb-4 bg-light rounded-3">
          <div className="container-fluid py-5">
            <h1 className="display-5 fw-bold">Order for Pickup/Delivery</h1>
            <p className="col-md-10 fs-4">
              Note: We do not deliver ourselves. Please order through GrubHub or
              Doordash.
            </p>
            <button className="btn btn-warning btn-lg" type="button">
              Menu
            </button>

            <div className="row row-cols-1 row-cols-md-3 mt-5 text-center">
              
              <div className="col">
                <div className="card rounded-3 shadow-sm border-success">
                  <div className="card-header py-3 bg-success">
                    <h4 className="my-0 fw-normal text-white">GrubHub</h4>
                  </div>
                  <div className="card-body">
                    <img
                      src={GrubHub}
                      alt="Logo"
                      width="60%"
                      height="40%"
                      className="d-inline-block align-text-top"
                    />
                    <button type="button" className="w-100 btn btn-lg btn-dark mt-3">
                      Click for GrubHub
                    </button>
                  </div>
                </div>
              </div>

              <div className="col">
                <div className="card rounded-3 shadow-sm border-success">
                  <div className="card-header py-3 bg-success">
                    <h4 className="my-0 fw-normal text-white">Phone</h4>
                  </div>
                  <div className="card-body">
                    <h4 className="card-title text-left">
                      Line 1: (847) 662-0066
                    </h4>
                    <h5 className="card-title text-left">
                      Line 2: (847) 662-0108
                    </h5>
                    <ul className="list-unstyled mt-4 mb-4">
                      <li>Call Line 2 if Line 1 does not work</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div className="col">
                <div className="card rounded-3 shadow-sm border-success">
                  <div className="card-header py-3 bg-success">
                    <h4 className="my-0 fw-normal text-white">DoorDash</h4>
                  </div>
                  <div className="card-body">
                    <img
                      src={DoorDash}
                      alt="Logo"
                      width="60%"
                      height="40%"
                      className="d-inline-block align-text-top"
                    />
                    <button type="button" className="w-100 btn btn-lg btn-dark mt-3">
                      Click for Doordash
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    );
  }
}
