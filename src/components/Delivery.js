import React, { Component } from "react";
import GrubHub from "./grubhub-logo.png";
import DoorDash from "./doordash-logo.png";
import "../styles.css";
import { Link } from "react-router-dom";
export default class Delivery extends Component {
  render() {
    return (
      <div style={{marginTop: '6rem'}}> 
        <section id="contact" className="contact">
          <div className="container p-5 mb-4 bg-light rounded-3 text-center">
            <h1 className="display-5 fw-bold">Order for Pickup/Delivery</h1>
            <p className="fs-4">
              Note: We do not deliver ourselves. Please order through GrubHub or
              Doordash.
            </p>
            <div className="d-flex justify-content-center">
            <Link
              className="bg-dark mb-5"
              to="/menu"
              style={{ padding: 0, width: "max-content", height: "3rem" }}
            >
              <button className="btn btn-warning btn-lg mb-5 menu-btn" type="button">
                Menu
              </button>
            </Link>
            </div>
           

            <div className="row">
              <div className="col-lg-4">
                <div className="box text-center">
                  <span>GrubHub</span>
                  <img
                    src={GrubHub}
                    alt="Logo"
                    width="60%"
                    height="40%"
                    className="d-inline-block align-text-top"
                  />
                  <Link
                    to={{
                      pathname:
                        "https://www.grubhub.com/restaurant/best-panda-chinese-restaurant-4949-grand-ave-ste-4a-gurnee/1044083",
                    }}
                    target="GrubHub"
                  >
                    <button
                      type="button"
                      className="w-100 btn btn-lg btn-dark mt-3"
                      style={{ fontSize: "1.2rem" }}
                    >
                      Click for GrubHub
                    </button>
                  </Link>
                </div>
              </div>

              <div className="col-lg-4 mt-4 mt-lg-0">
                <div className="box text-center">
                  <span>Phone</span>
                  <h4 className="card-title text-center">
                    Line 1: (847) 662-0066
                  </h4>
                  <h4 className="card-title  pt-3">Line 2: (847) 662-0108</h4>
                  <h5 className="card-title pt-4">
                    Call Line 2 if Line 1 does not work
                  </h5>
                </div>
              </div>

              <div className="col-lg-4 mt-4 mt-lg-0">
                <div className="box text-center">
                  <span>DoorDash</span>
                  <img
                    src={DoorDash}
                    alt="Logo"
                    width="60%"
                    height="40%"
                    className="d-inline-block align-text-top"
                  />
                  <Link
                    to={{
                      pathname:
                        "https://www.doordash.com/store/best-panda-chinese-restaurant-gurnee-757771/",
                    }}
                    target="DoorDash"
                  >
                    <button
                      type="button"
                      className="w-100 btn btn-lg btn-dark mt-3"
                      style={{ fontSize: "1.2rem" }}
                    >
                      Click for DoorDash
                    </button>
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </section>
        {/* <div className="p-5 mb-4 bg-light rounded-3">
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
                <div className="card h-100 rounded-3 shadow-sm border-success">
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
                    <button
                      type="button"
                      className="w-100 btn btn-lg btn-dark mt-3"
                    >
                      Click for GrubHub
                    </button>
                  </div>
                </div>
              </div>

              <div className="col">
                <div className="card h-100 rounded-3 shadow-sm border-success d-flex justify-content-center align-items-left">
                  <div className="card-header py-3 bg-success">
                    <h4 className="my-0 fw-normal text-white">Phone</h4>
                  </div>
                  <div className="card-body">
                    <h4 className="card-title text-center pt-5">
                      Line 1: (847) 662-0066
                    </h4>
                    <h4 className="card-title text-center pt-3">
                      Line 2: (847) 662-0108
                    </h4>
                    <h5 className="card-title text-center pt-4">
                      Call Line 2 if Line 1 does not work
                    </h5>
                  </div>
                </div>
              </div>

              <div className="col">
                <div className="card h-100 rounded-3 shadow-sm border-success">
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
                    <button
                      type="button"
                      className="w-100 btn btn-lg btn-dark mt-3"
                    >
                      Click for Doordash
                    </button>
                  </div>
                </div>
              </div>
            </div> 



          </div>
        </div> */}
      </div>
    );
  }
}
