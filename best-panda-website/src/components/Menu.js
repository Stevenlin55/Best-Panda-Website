import React, { Component } from "react";
import "../styles.css";
import Accordion from "./Accordion.js";
import db from "./firebase.js";
export default class Menu extends Component {
  constructor(props) {
    super(props);
    this.state = {
      categories: [
        { name: "Appetizer" },
        { name: "Soup" },
        { name: "Chop Suey" },
        { name: "Egg Foo Young" },
      ],
    };
  }
  componentDidMount() {
    this.fetchDataFromFirebase();
  }

  async fetchDataFromFirebase() {
    try {
      for (let i = 0; i < this.state.categories.length; i++) {
        //loop through all the categories
        const snapshot = await db
          .collection(this.state.categories[i].name)
          .get(); //get snapshot of all categories
        this.state.categories[i].items = snapshot.docs.map((doc) => ({ //update the categories' items from snapshot
          name: doc.id,
          price: doc.data().price,
          details: doc.data().description,
        })); 
      }
    } catch (err) {
      console.log(err);
    }
  }

  render() {
    return (
      <div>
        <div className="container py-5">
          <div className="row">
            <div className="col-lg-10 mx-auto col-12 text-center mb-3">
              <h1 className="mt-0 text-dark">Our Menu</h1>
              <p className="lead" style={{ color: "gray" }}>
                Pricing and availability are subject to change
              </p>
            </div>

            <div className="accordion" id="accordionPanelsStayOpenExample">
              <Accordion categories={this.state.categories} />
            </div>
          </div>
        </div>
      </div>
    );
  }
}
