$(document).ready(function() {
    // config
    var tickerPath = "/tickerinfo.php"; // Where the JSON comes from
    var updateInterval = 90; // In seconds
    // end config
    
    var secondsSinceUpdate = 0;
    var intervalId = null;

    function updateMarketInfo() {
        $.getJSON(tickerPath, null, function(data) {        
            if (intervalId == null) {
                intervalId = setInterval(function() {
                    secondsSinceUpdate++;
                    var secondUnit = secondsText;
                    if (secondsSinceUpdate == 1) {
                      secondUnit = secondText;
                    }
                    $('#seconds-since-update').text(secondsSinceUpdate + " " + secondUnit);
                }, 1000);
            }
            $('#current-price').text("$" + data['price'] + " USD/PPC");
            $('#market-cap').text("$" + commaSeparateNumber(data['market_cap']));
            $('#total-supply').text(commaSeparateNumber(data['total_supply']) + " PPC");
            secondsSinceUpdate = 0;
        });
    }
    
    // Helper to comma-sepaate the market cap and supply
    // Credit to: http://bit.ly/1alo9Ye
    function commaSeparateNumber(val){
        while (/(\d+)(\d{3})/.test(val.toString())){
          val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
        }
        return val;
    }

    updateMarketInfo();

    //Block info update
    var Mu = Mustache;
    BlockInfo = function(config){
        this.fetchUrl = 'http://ppc.blockr.io/api/v1/block/info/last';
        this.info = {};
        this.tpl = config.tpl || '';
        this.container = config.container;
    };

    BlockInfo.prototype.getInfo = function(callback) {
        var self = this;
        $.getJSON(this.fetchUrl, null, function(data) {  
            var info = data.data;

            info.minFlag = info[info.extras.flags];
            info.difficulty = commaSeparateNumber(info.difficulty);
            info.vout_sum = commaSeparateNumber(info.vout_sum);
            info.days_destroyed = commaSeparateNumber(info.days_destroyed);
            
            self.info = info;
            callback && callback();
        });
    }

    BlockInfo.prototype.render = function(){
        var shortName = {
            'proof-of-stake': 'POS',
            'proof-of-work': 'POW'
        };
        this.info.minFlag = shortName[this.info.extras.flags];
        return Mu.render(this.tpl, {
            info: this.info
        });
    };

    BlockInfo.prototype.update = function() {
        var self = this;
        this.getInfo(function(data) {
            var html = self.render();
            self.container.html(html);
        });
    };

    var lastBlock = new BlockInfo({
        tpl: $('#J_indexBlockInfoTpl').html(),
        container: $('#J_lastBlockContainer')
    });

    //update the last block info to the html;
    lastBlock.update();

    setInterval(function(){
        updateMarketInfo();
        lastBlock.update();
    }, 30000);
});
