import React, { Component } from "react";
import db from "./firebase.js";
export default class FAQ extends Component {
  constructor(props) {
    super(props);

    this.state = {
      category: "",
      food: "",
      price: "",
      description: "",
      number: "",
    };
  }

  async addFood(e) {
    e.preventDefault();
    try {
        await db.collection(this.state.category).doc(this.state.food).set({
            //adds users to firestore after they register
            price: this.state.price, //can use this to add a welcome video for all new users
            description: this.state.description,
            number: this.state.number
          });
          alert('added');
    } catch (err) {
      alert(err);
    }
  }

  onCategoryChange(e) {
      this.setState({
          category: e.target.value
      });
  }

  onFoodChange(e) {
    this.setState({
      food: e.target.value,
    });
  }
  onPriceChange(e) {
    this.setState({
      price: e.target.value,
    });
  }
  onDescriptionChange(e) {
    this.setState({
      description: e.target.value,
    });
  }
  onNumberChange(e) {
    this.setState({
      number: e.target.value,
    });
  }

  render() {
    return (
      <div className="container mt-5">
        <form onSubmit={(e) => this.addFood(e)}>
        <div className="form-group">
            <label for="exampleInputPassword1">Category</label>
            <input
              onChange={(e) => this.onCategoryChange(e)}
              value={this.state.category}
              type="text"
              className="form-control mb-3"
              placeholder="Enter category"
            />
          </div>
          <div className="form-group">
            <label for="exampleInputEmail1">Food</label>
            <input
              onChange={(e) => this.onFoodChange(e)}
              value={this.state.food}
              type="text"
              className="form-control mb-3"
              placeholder="Enter food"
            />
          </div>
          <div className="form-group">
            <label for="exampleInputPassword1">Price</label>
            <input
              onChange={(e) => this.onPriceChange(e)}
              value={this.state.price}
              type="text"
              className="form-control mb-3"
              placeholder="Enter price"
            />
          </div>
          <div className="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input
              onChange={(e) => this.onDescriptionChange(e)}
              value={this.state.description}
              type="text"
              className="form-control mb-3"
              placeholder="Enter description"
            />
          </div>
          <div className="form-group">
            <label for="exampleInputPassword1">Number</label>
            <input
              onChange={(e) => this.onNumberChange(e)}
              value={this.state.number}
              type="number"
              className="form-control"
              placeholder="Enter number"
            />
          </div>

          <button type="submit" className="btn btn-primary mt-3">
            Submit
          </button>
        </form>
      </div>
    );
  }
}
