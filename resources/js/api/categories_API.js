// This is an example of an API, please create a new one
import request from '../utils/request.js'; //
import { template } from './templateURL.js';

const urlAPI = {
  // Create new Meeting Information
  urlPOSTcategories: template`/categories`,
  //  Get a Meeting Infomation
  urlGETcategories: template`/categories/`,
  // Update Meeting Infomation
  urlPUTcategories: template`/categories/${'categories'}`,
  // Delete partisipant belong to {meeting_id}
  urlDELETEcategories: template`/categories/${'categories'}`,
};
/**
 * Validate a full-lowercase string
 * @return {Object}
 * @param {Object} params
 */
export function createCategories(params) {
  return request.postRequest(urlAPI.urlPOSTcategories(), params);
}
/**
 * Validate a full-lowercase string
 * @return {Object}
 * @param {String} id
 */
export function getCategories() {
  return request.getRequest(urlAPI.urlGETcategories());
}
/**
 * Validate a full-lowercase string
 * @return {Object}
 * @param {String} id
 * @param {Object} params
 */
export function updateCategories(params) {
  return request.putRequest(urlAPI.urlPUTcategories(), params);
}

/**
 * Validate a full-lowercase string
 * @return {Object}
 * @param {String} id
 * @param {String} email
 */
export function deleteCategories(id) {
  return request.deleteRequest(urlAPI.urlDELETEcategories({ categories: id }));
}
