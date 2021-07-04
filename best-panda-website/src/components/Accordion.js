import React, { Component } from "react";
import "../styles.css";
export default class Accordion extends Component {
  
  renderItems(category) {
    if (category.items) {
      return (category.items.map((item, index) => (
        <div class="col-sm-6">
        <div key={index} className="card">
          <div className="card-body">
            <h5 className="card-title fw-bold">
              {item.name}
              <span className="pull-right fw-bold">
                {item.price}
              </span>
            </h5>
            <p className="card-text">{item.details}</p>
          </div>
        </div>
        </div>
      )))
    }
  }
  render() {
    console.log(this.props.categories)
    if (this.props.categories) {
      return (
        <div>
          <div className="accordion" id="accordionPanelsStayOpenExample">
            {this.props.categories.map((category, index) => (
              <div key={index} className="accordion-item">
                <h2
                  className="accordion-header"
                  id={"panelsStayOpen-headings" + category.name.toString().split(" ").join("")}
                >
                  <button
                    className="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target={"#panelsStayOpen-collapse" + category.name.toString().split(" ").join("")}
                    aria-expanded="false"
                    aria-controls={"panelsStayOpen-collapse" + category.name.toString().split(" ").join("")}
                  >
                    {category.name}
                  </button>
                </h2>
                <div
                  id={"panelsStayOpen-collapse" + category.name.toString().split(" ").join("")}
                  className="accordion-collapse collapse"
                  aria-labelledby={"panelsStayOpen-heading" + category.name.toString().split(" ").join("")}
                >
                  <div className="accordion-body">
                    <div className="row">
                      {this.renderItems(category)}
                    </div>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      );
    } else {
      return <div>Loading</div>;
    }
  }
}
