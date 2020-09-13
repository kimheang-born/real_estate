import * as types from "../actionTypes";

// Init
const initialState = {
  list: []
};

// Reducer
export default function ___replace_me___ListReducer(state = initialState, action) {
  switch (action.type) {
    
    // Insert here your custom reducers


    // START REDUCERS
    case types.DELETE_u___replace_me____SUCCESS:
      return { ...state, l___replace_me___: action.payload };
    case types.LIST_u___replace_me____SUCCESS:
      return { ...state, list___replace_me___: action.payload };
     // END REDUCERS
    
    default:
      return state;
  }
}