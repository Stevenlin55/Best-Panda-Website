import React, { Component } from "react";
import "../styles.css";
export default class Accordion extends Component {
  constructor(props) {
    super(props);
    
  }

  createCategories() {
    let categories = [];
    for (let category of this.props.categories) {
        categories.push(

        
      <div className="accordion-item">
        <h2
          className="accordion-header"
          id={"panelsStayOpen-headings" + category.name}
        >
          <button
            className="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target={"#panelsStayOpen-collapse" + category.name}
            aria-expanded="false"
            aria-controls={"panelsStayOpen-collapse" + category.name}
          >
            {category}
          </button>
        </h2>
        <div
          id={"panelsStayOpen-collapse" + category.name}
          className="accordion-collapse collapse"
          aria-labelledby={"panelsStayOpen-heading" + category.name}
        >
          <div className="accordion-body">
            <div className="row">{this.createItemsFromCategory()}</div>
          </div>
        </div>
      </div>);
    }
    console.log(categories)
  
  }

  createItemsFromCategory() {
    <div className="col-sm-6">
      <div className="card">
        <div className="card-body">
          <h5 className="card-title fw-bold">
            Egg Roll<span className="pull-right fw-bold">123</span>
          </h5>
          <p className="card-text">hi</p>
        </div>
      </div>
    </div>;
  }

  render() {
    return (
      <div>
        <div className="accordion" id="accordionPanelsStayOpenExample">
          {this.createCategories()}
        </div>
      </div>
    );
  }
}
