import React, { Component } from "react";
import "../styles.css";
import chili from "./chili.png";
export default class Accordion extends Component {
  renderItems(category) {
    if (category.items) {
      //if we have all the items of the categories, show the cards for each item
      return category.items.map((item, index) => (
        <div key={index} className="col-sm-6">
          <div key={index} className="card">
            <div className="card-body">
              <h5 className="card-title fw-bold">
                {item.name}
                {this.addChiliIfSpicy(item)}
                <span className="pull-right fw-bold">{item.price}</span>
              </h5>
              <p className="card-text">{item.details}</p>
            </div>
          </div>
        </div>
      ));
    }
    return (
      //if we don't have the items, show spinners in each category
      <div className="spinner-border text-success m-auto" role="status">
        <span className="sr-only"></span>
      </div>
    );
  }
  addChiliIfSpicy(item) {
    if (item.details.includes("Spicy")) {
      return (
        <img
          src={chili}
          alt="Chili"
          width="40"
          height="42"
          className="d-incline-block"
          style={{ marginLeft: "-10px", marginTop: "-5px" }}
        />
      );
    }
  }
  addSubHeadingToCategories(category) {
    if (category === "Daily Special") {
      return (
        <h5 className="text-left mb-4">
          All served with plain fried rice or white rice
        </h5>
      );
    }
    if (category === "Lunch Menu") {
      return (
        <div>
          <h5 className="text-left mb-2">
            All served with Egg Roll and Fried Rice
          </h5>

          <h6 className="text-left mb-2">
            Served from Tuesday — Saturday
          </h6>
          <h6 className="text-left mb-2">
            11:30A.M. — 2:30P.M
          </h6>
          <h6 className="text-left mb-4">No substitutions</h6>
        </div>
      );
    }
  }

  render() {
    if (this.props.categories && this.props.categories[0].items) {
      return (
        <div>
          <div className="accordion" id="accordionPanelsStayOpenExample">
            {this.props.categories.map(
              (
                category,
                index //creates the accordion and uses the categories as labels for the accordion panels
              ) => (
                <div key={index} className="accordion-item">
                  <h2
                    className="accordion-header"
                    id={
                      "panelsStayOpen-headings" +
                      category.name.toString().split(" ").join("") //makes sure  every string doesn't include spaces because then accordions actually open
                    }
                  >
                    <button
                      className="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target={
                        "#panelsStayOpen-collapse" +
                        category.name.toString().split(" ").join("")
                      }
                      aria-expanded="false"
                      aria-controls={
                        "panelsStayOpen-collapse" +
                        category.name.toString().split(" ").join("")
                      }
                    >
                      {category.name}
                    </button>
                  </h2>
                  <div
                    id={
                      "panelsStayOpen-collapse" +
                      category.name.toString().split(" ").join("")
                    }
                    className="accordion-collapse collapse"
                    aria-labelledby={
                      "panelsStayOpen-heading" +
                      category.name.toString().split(" ").join("")
                    }
                  >
                    <div className="accordion-body">
                      {this.addSubHeadingToCategories(category.name)}
                      <div className="row">{this.renderItems(category)}</div>
                    </div>
                  </div>
                </div>
              )
            )}
          </div>
        </div>
      );
    } else {
      return (
        <div
          className="spinner-border text-success d-block m-auto"
          role="status"
        >
          <span className="sr-only"></span>
        </div>
      );
    }
  }
}
