// This is an example of an API, please create a new one
import request from '../utils/request.js'; //
import { template } from './templateURL.js';

const urlAPI = {
  // Create new Meeting Information
  urlPOSTtags: template`/tags`,
  //  Get a Meeting Infomation
  urlGETtags: template`/tags/`,
  // Update Meeting Infomation
  urlPUTtags: template`/tags/${'tags'}`,
  // Delete partisipant belong to {meeting_id}
  urlDELETEtags: template`/tags/${'tags'}`,
};
/**
 * Validate a full-lowercase string
 * @return {Object}
 * @param {Object} params
 */
export function createTag(params) {
  return request.postRequest(urlAPI.urlPOSTtags(), params);
}
/**
 * Validate a full-lowercase string
 * @return {Object}
 * @param {String} id
 */
export function getTag() {
  return request.getRequest(urlAPI.urlGETtags());
}
/**
 * Validate a full-lowercase string
 * @return {Object}
 * @param {String} id
 * @param {Object} params
 */
export function updateTag(param) {
  return request.putRequest(urlAPI.urlPUTtags({ tags: param.id }), param);
}

/**
 * Validate a full-lowercase string
 * @return {Object}
 * @param {String} id
 * @param {String} email
 */
export function deleteTag(id) {
  return request.deleteRequest(urlAPI.urlDELETEtags({ tags: id }));
}
