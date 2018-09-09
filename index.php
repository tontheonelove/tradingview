<!DOCTYPE html>
<html>
<head>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  grid-gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}
.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}
.item1 {
  grid-column-start: 1;
  grid-column-end: 3;
}
</style>
</head>
<body>

<h1>Grid Lines</h1>

<div class="grid-container">
  <div class="item1"><!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_5ac5d"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSDT/" rel="noopener" target="_blank"><span class="blue-text">BTCUSDT chart</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 600,
  "height": 300,
  "symbol": "BTCUSDT",
  "interval": "5",
  "timezone": "Asia/Bangkok",
  "theme": "Dark",
  "style": "8",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "MASimple@tv-basicstudies",
    "StochasticRSI@tv-basicstudies"
  ],
  "container_id": "tradingview_5ac5d"
}
  );
  </script>
</div>
<!-- TradingView Widget END --></div>


  <div class="item2"><!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_5ac5d"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSDT/" rel="noopener" target="_blank"><span class="blue-text">BTCUSDT chart</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 600,
  "height": 300,
  "symbol": "BTCUSDT",
  "interval": "5",
  "timezone": "Asia/Bangkok",
  "theme": "Dark",
  "style": "8",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "studies": [
    "MASimple@tv-basicstudies",
    "StochasticRSI@tv-basicstudies"
  ],
  "container_id": "tradingview_5ac5d"
}
  );
  </script>
</div>
<!-- TradingView Widget END --></div>
  <div class="item3">3</div>  
  <div class="item4">4</div>
  <div class="item5">5</div>
  <div class="item6">6</div>
  <div class="item7">7</div>
  <div class="item8">8</div>  
</div>

<p>You can refer to line numbers when placing grid items.</p>

</body>
</html>
