var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function (req, res, next) {
  res.render('index', {
    title: 'Express'
  });
});

router.post('/', function (req, res, next) {
  var firstName = req.body.first_name;
  var lastName = req.body.last_name;
  var $salary = parseFloat(req.body.annual_sallary);
  var superRate = parseFloat(req.body.super_rate);
  var paymentDate = req.body.payment_start_date;

  if ($salary >= 0 && $salary <= 18200) {
    $grossIncome = Math.round($salary / 12);
    $incomeTax = 0;
    $netIncome = $grossIncome - $incomeTax;
    $superAmount = Math.round($grossIncome * superRate / 100);
  } else if ($salary >= 18201 && $salary <= 37000) {
    $grossIncome = Math.round($salary / 12);
    $incomeTax = Math.round((0 + 0.19 * ($salary - 18200)) / 12);
    $netIncome = $grossIncome - $incomeTax;
    $superAmount = Math.round($grossIncome * superRate / 100);
  } else if ($salary >= 37001 && $salary <= 87000) {
    $grossIncome = Math.round($salary / 12);
    $incomeTax = Math.round((3572 + 0.325 * ($salary - 37000)) / 12);
    $netIncome = $grossIncome - $incomeTax;
    $superAmount = Math.round($grossIncome * superRate / 100);
  } else if ($salary >= 87001 && $salary <= 180000) {
    $grossIncome = Math.round($salary / 12);
    $incomeTax = Math.round((19822 + 0.37 * ($salary - 87000)) / 12);
    $netIncome = $grossIncome - $incomeTax;
    $superAmount = Math.round($grossIncome * superRate / 100);
  } else {
    $grossIncome = Math.round($salary / 12);
    $incomeTax = Math.round((54232 + 0.45 * ($salary - 180000)) / 12);
    $netIncome = $grossIncome - $incomeTax;
    $superAmount = Math.round($grossIncome * superRate / 100);
  }

  res.render('calc', {
    title: 'Calculator',
    nameFor: firstName+' '+lastName,
    grossIncome: $grossIncome,
    incomeTax: $incomeTax,
    netIncome: $netIncome,
    superAmount: $superAmount,
    paymentDate: paymentDate
  });
});

module.exports = router;