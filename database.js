// JavaScript Document

const {createPool} = require ('mysql')

const pool = createPool ({
	host:"local host",
	user:"root",
	password:"rootuser",
	connectionLimit: 10
})

pool.query('select * from user')