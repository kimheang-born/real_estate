import * as types from "../../actionTypes";
import ___replace_me___Api from "../../../api/___replace_me___Api";

let actionsFunction = {
  // Reset reducer
  reset: function() {
    return { type: types.RESET__u___replace_me___ };
  },

  //CRUD METHODS

  // Create ___replace_me___
  create___replace_me___: function(l___replace_me___) {
    return function(dispatch) {
      return ___replace_me___Api
        .create___replace_me___(l___replace_me___)
        .then(l___replace_me___ => {
          dispatch(actionsFunction.create___replace_me___Success(l___replace_me___));
        })
        .catch(error => {
          throw error;
        });
    };
  },

  create___replace_me___Success: function(l___replace_me___) {
    return { type: types.CREATE_u___replace_me____SUCCESS, payload: l___replace_me___ };
  },


  // Delete ___replace_me___
  delete___replace_me___: function(id) {
    return function(dispatch) {
      return ___replace_me___Api
        .delete___replace_me___(id)
        .then(l___replace_me___ => {
          dispatch(actionsFunction.delete___replace_me___Success(l___replace_me___));
        })
        .catch(error => {
          throw error;
        });
    };
  },

  delete___replace_me___Success: function(l___replace_me___) {
    return { type: types.DELETE_u___replace_me____SUCCESS, payload: l___replace_me___ };
  },


  

  // Get ___replace_me___
  load___replace_me___: function(id) {
    return function(dispatch) {
      return ___replace_me___Api
        .getOne___replace_me___(id)
        .then(l___replace_me___ => {
          dispatch(actionsFunction.load___replace_me___Success(l___replace_me___));
        })
        .catch(error => {
          throw error;
        });
    };
  },

  load___replace_me___Success: function(l___replace_me___) {
    return { type: types.GET_u___replace_me____SUCCESS, payload: l___replace_me___ };
  },

  // Load  list
  load___replace_me___List: function() {
    return function(dispatch) {
      return ___replace_me___Api
        .get___replace_me___List()
        .then(list => {
          dispatch(actionsFunction.load___replace_me___ListSuccess(list));
        })
        .catch(error => {
          throw error;
        });
    };
  },

  load___replace_me___ListSuccess: function(list) {
    return { type: types.LIST_u___replace_me____SUCCESS, payload: list };
  },


  // // Load  form optiom
  // load___replace_me___FormOption: function() {
  //   return function(dispatch) {
  //     return ___replace_me___Api
  //       .get___replace_me___FormOption()
  //       .then(list => {
  //         dispatch(actionsFunction.load___replace_me___FormOptionSuccess(list));
  //       })
  //       .catch(error => {
  //         throw error;
  //       });
  //   };
  // },

  // load___replace_me___FormOptionSuccess: function(list) {
  //   return { type: types.LIST_u___replace_me____SUCCESS, payload: list };
  // },

  // // Load  search optiom
  // load___replace_me___SearchOption: function() {
  //   return function(dispatch) {
  //     return ___replace_me___Api
  //       .get___replace_me___SearchOption()
  //       .then(list => {
  //         dispatch(actionsFunction.load___replace_me___SearchOptionSuccess(list));
  //       })
  //       .catch(error => {
  //         throw error;
  //       });
  //   };
  // },

  // load___replace_me___SearchOptionSuccess: function(list) {
  //   return { type: types.LIST_u___replace_me____SUCCESS, payload: list };
  // },

	
  // Save ___replace_me___
  save___replace_me___: function(l___replace_me___) {
    return function(dispatch) {
      return ___replace_me___Api
        .save___replace_me___(l___replace_me___)
        .then(l___replace_me___ => {
          dispatch(actionsFunction.save___replace_me___Success(l___replace_me___));
        })
        .catch(error => {
          throw error;
        });
    };
  },

  save___replace_me___Success: function(l___replace_me___) {
    return { type: types.UPDATE_u___replace_me____SUCCESS, payload: l___replace_me___ };
  },


};

export default actionsFunction;