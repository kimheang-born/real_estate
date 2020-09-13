import * as types from "../../actionTypes";
import CustomerApi from "../../../api/CustomerApi";

let actionsFunction = {
  // Reset reducer
  reset: function() {
    return { type: types.RESET__CUSTOMER };
  },

  //CRUD METHODS

  // Create Customer
  createCustomer: function(customer) {
    return function(dispatch) {
      return CustomerApi
        .createCustomer(customer)
        .then(customer => {
          dispatch(actionsFunction.createCustomerSuccess(customer));
        })
        .catch(error => {
          throw error;
        });
    };
  },

  createCustomerSuccess: function(customer) {
    return { type: types.CREATE_CUSTOMER_SUCCESS, payload: customer };
  },


  // Delete Customer
  deleteCustomer: function(id) {
    return function(dispatch) {
      return CustomerApi
        .deleteCustomer(id)
        .then(customer => {
          dispatch(actionsFunction.deleteCustomerSuccess(customer));
        })
        .catch(error => {
          throw error;
        });
    };
  },

  deleteCustomerSuccess: function(customer) {
    return { type: types.DELETE_CUSTOMER_SUCCESS, payload: customer };
  },


  

  // Get Customer
  loadCustomer: function(id) {
    return function(dispatch) {
      return CustomerApi
        .getOneCustomer(id)
        .then(customer => {
          dispatch(actionsFunction.loadCustomerSuccess(customer));
        })
        .catch(error => {
          throw error;
        });
    };
  },

  loadCustomerSuccess: function(customer) {
    return { type: types.GET_CUSTOMER_SUCCESS, payload: customer };
  },

  // Load  list
  loadCustomerList: function() {
    return function(dispatch) {
      return CustomerApi
        .getCustomerList()
        .then(list => {
          dispatch(actionsFunction.loadCustomerListSuccess(list));
        })
        .catch(error => {
          throw error;
        });
    };
  },

  loadCustomerListSuccess: function(list) {
    return { type: types.LIST_CUSTOMER_SUCCESS, payload: list };
  },


  // // Load  form optiom
  // loadCustomerFormOption: function() {
  //   return function(dispatch) {
  //     return CustomerApi
  //       .getCustomerFormOption()
  //       .then(list => {
  //         dispatch(actionsFunction.loadCustomerFormOptionSuccess(list));
  //       })
  //       .catch(error => {
  //         throw error;
  //       });
  //   };
  // },

  // loadCustomerFormOptionSuccess: function(list) {
  //   return { type: types.LIST_CUSTOMER_SUCCESS, payload: list };
  // },

  // // Load  search optiom
  // loadCustomerSearchOption: function() {
  //   return function(dispatch) {
  //     return CustomerApi
  //       .getCustomerSearchOption()
  //       .then(list => {
  //         dispatch(actionsFunction.loadCustomerSearchOptionSuccess(list));
  //       })
  //       .catch(error => {
  //         throw error;
  //       });
  //   };
  // },

  // loadCustomerSearchOptionSuccess: function(list) {
  //   return { type: types.LIST_CUSTOMER_SUCCESS, payload: list };
  // },

	
  // Save Customer
  saveCustomer: function(customer) {
    return function(dispatch) {
      return CustomerApi
        .saveCustomer(customer)
        .then(customer => {
          dispatch(actionsFunction.saveCustomerSuccess(customer));
        })
        .catch(error => {
          throw error;
        });
    };
  },

  saveCustomerSuccess: function(customer) {
    return { type: types.UPDATE_CUSTOMER_SUCCESS, payload: customer };
  },


};

export default actionsFunction;
