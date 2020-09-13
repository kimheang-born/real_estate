import * as types from "../actionTypes";

// Init
const initialState = {
  list: []
};

// Reducer
export default function CustomerListReducer(state = initialState, action) {
  switch (action.type) {
    
    // Insert here your custom reducers


    // START REDUCERS
    case types.DELETE_CUSTOMER_SUCCESS:
      return { ...state, customer: action.payload };
    case types.LIST_CUSTOMER_SUCCESS:
      return { ...state, listCustomer: action.payload };
     // END REDUCERS
    
    default:
      return state;
  }
}