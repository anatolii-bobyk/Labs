var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});

router.get('/user/cool', function(req, res, next) {
  res.render('user', { user: 'Storchak Vasil' });
});


module.exports = router;
