var express = require("express");
var router = express.Router();

router.use(function timeLog(req,res,next){
	console.log("Time:",Date.now());
	next();
})
router.get("/",function(req,res){
	res.render("index",{
		title:"首页",
		content:"hello swig"
	});
});

module.exports = router;
