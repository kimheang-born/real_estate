import * as types from "../actionTypes";

// Init
const initialState = {
  customer: {}
};

// Reducer
export default function CustomerEditReducer(state = initialState, action) {
  switch (action.type) { 
    
    // Insert here your custom reducers


    // START REDUCERS
    case types.CREATE_CUSTOMER_SUCCESS:
      return { ...state, customer: action.payload };
    case types.UPDATE_CUSTOMER_SUCCESS:
      return { ...state, customer: action.payload };
    case types.GET_CUSTOMER_SUCCESS:
      return { ...state, customer: action.payload };
     // END REDUCERS
    
    default:
      return state;
  }
}