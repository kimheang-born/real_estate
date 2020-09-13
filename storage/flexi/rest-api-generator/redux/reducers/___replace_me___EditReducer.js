import * as types from "../actionTypes";

// Init
const initialState = {
  l___replace_me___: {}
};

// Reducer
export default function ___replace_me___EditReducer(state = initialState, action) {
  switch (action.type) { 
    
    // Insert here your custom reducers


    // START REDUCERS
    case types.CREATE_u___replace_me____SUCCESS:
      return { ...state, l___replace_me___: action.payload };
    case types.UPDATE_u___replace_me____SUCCESS:
      return { ...state, l___replace_me___: action.payload };
    case types.GET_u___replace_me____SUCCESS:
      return { ...state, l___replace_me___: action.payload };
     // END REDUCERS
    
    default:
      return state;
  }
}