// This is an example of an API, please create a new one
// import { param } from 'jquery';
import request from '../utils/request.js'; //
import { template } from './templateURL.js';

const urlAPI = {
  // Create new Meeting Information
  urlPOSTpost: template`/post`,
  //  Get a Meeting Infomation
  urlGETpost: template`/post?page=${'params'}`,
  urlGETpostHomepage: template`/post?page=${'params'}&homepage=${'home'}`,
  // Update Meeting Infomation
  urlPUTpost: template`/post/${'post'}?_method=PUT`,
  // Delete partisipant belong to {meeting_id}
  urlDELETEpost: template`/post/${'post'}`,
  urlGETSiglepost: template`/post/${'post'}`,
};
/**
 * Validate a full-lowercase string
 * @return {Object}
 * @param {Object} params
 */
export function createPost(params) {
  return request.postRequest(urlAPI.urlPOSTpost(), params);
}
/**
 * Validate a full-lowercase string
 * @return {Object}
 * @param {String} id
 */
export function getPost(params){
  if (params.homepage){
    return request.getRequest(urlAPI.urlGETpostHomepage({ params: params.page, home: params.homepage }));
  } else {
    return request.getRequest(urlAPI.urlGETpost({ params: params.page }));
  }
}
/**
 * Validate a full-lowercase string
 * @return {Object}
 * @param {String}
 */
export function getOnePost(id) {
  return request.getRequest(urlAPI.urlGETSiglepost({ post: id }));
}
/**
 * Validate a full-lowercase string
 * @return {Object}
 * @param {String} id
 * @param {Object} params
 */
export function updatePost(params, id) {
  return request.postRequest(urlAPI.urlPUTpost({ post: id }), params);
}

/**
 * Validate a full-lowercase string
 * @return {Object}
 * @param {String} id
 * @param {String} email
 */
export function deletePost(id) {
  return request.deleteRequest(urlAPI.urlDELETEpost({ post: id }));
}
