{"filter":false,"title":"Tree_path.php","tooltip":"/cms/app/Tree_path.php","ace":{"folds":[],"scrolltop":23,"scrollleft":0,"selection":{"start":{"row":12,"column":0},"end":{"row":19,"column":5},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"940fa8ef0ee9fab5ad1312f72c9c86304492d234","undoManager":{"mark":34,"position":34,"stack":[[{"start":{"row":8,"column":0},"end":{"row":8,"column":6},"action":"remove","lines":["    //"],"id":2},{"start":{"row":8,"column":0},"end":{"row":10,"column":6},"action":"insert","lines":["    protected $fillable = [","        'name', 'email','position', 'password','flag',","    ];"]}],[{"start":{"row":9,"column":15},"end":{"row":9,"column":54},"action":"remove","lines":[" 'email','position', 'password','flag',"],"id":5}],[{"start":{"row":9,"column":9},"end":{"row":9,"column":13},"action":"remove","lines":["name"],"id":6},{"start":{"row":9,"column":9},"end":{"row":9,"column":22},"action":"insert","lines":["descendant_id"]}],[{"start":{"row":10,"column":6},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":7},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":4},"end":{"row":12,"column":0},"action":"insert","lines":["",""]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":11,"column":4},"end":{"row":14,"column":5},"action":"insert","lines":[" // Userテーブルとのリレーション （従テーブル側）","     public function user() {","        return $this->belongsTo('App\\User');","    }"],"id":8}],[{"start":{"row":10,"column":6},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":9},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"insert","lines":["s"],"id":10}],[{"start":{"row":12,"column":0},"end":{"row":15,"column":5},"action":"remove","lines":["     // Userテーブルとのリレーション （従テーブル側）","     public function users() {","        return $this->belongsTo('App\\User');","    }"],"id":11}],[{"start":{"row":7,"column":1},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "]},{"start":{"row":8,"column":4},"end":{"row":9,"column":0},"action":"insert","lines":["",""]},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":4},"end":{"row":12,"column":5},"action":"insert","lines":["     // Userテーブルとのリレーション （従テーブル側）","     public function users() {","        return $this->belongsTo('App\\User');","    }"],"id":13}],[{"start":{"row":12,"column":5},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":14},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":14,"column":0},"end":{"row":16,"column":6},"action":"remove","lines":["    protected $fillable = [","        'descendant_id',","    ];"],"id":15}],[{"start":{"row":8,"column":4},"end":{"row":10,"column":6},"action":"insert","lines":["    protected $fillable = [","        'descendant_id',","    ];"],"id":16}],[{"start":{"row":7,"column":1},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":17},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":16,"column":0},"end":{"row":20,"column":3},"action":"remove","lines":["    ","","    ","","   "],"id":18}],[{"start":{"row":14,"column":42},"end":{"row":14,"column":55},"action":"insert","lines":["'ancestor_id'"],"id":19}],[{"start":{"row":14,"column":42},"end":{"row":14,"column":43},"action":"insert","lines":[","],"id":20}],[{"start":{"row":14,"column":44},"end":{"row":14,"column":55},"action":"remove","lines":["ancestor_id"],"id":21},{"start":{"row":14,"column":44},"end":{"row":14,"column":57},"action":"insert","lines":["descendant_id"]}],[{"start":{"row":16,"column":1},"end":{"row":19,"column":5},"action":"insert","lines":[" // Userテーブルとの多対多リレーション","     public function members() {","        return $this->belongsToMany('App\\User');","    }"],"id":22}],[{"start":{"row":15,"column":5},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":23},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":18,"column":26},"end":{"row":18,"column":27},"action":"remove","lines":["r"],"id":24},{"start":{"row":18,"column":25},"end":{"row":18,"column":26},"action":"remove","lines":["e"]},{"start":{"row":18,"column":24},"end":{"row":18,"column":25},"action":"remove","lines":["b"]},{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"remove","lines":["m"]},{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"remove","lines":["e"]},{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"remove","lines":["m"]}],[{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"insert","lines":["m"],"id":25},{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"insert","lines":["e"]},{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"insert","lines":["e"]},{"start":{"row":18,"column":24},"end":{"row":18,"column":25},"action":"insert","lines":["t"]}],[{"start":{"row":18,"column":25},"end":{"row":18,"column":26},"action":"insert","lines":["i"],"id":26},{"start":{"row":18,"column":26},"end":{"row":18,"column":27},"action":"insert","lines":["n"]},{"start":{"row":18,"column":27},"end":{"row":18,"column":28},"action":"insert","lines":["g"]}],[{"start":{"row":19,"column":44},"end":{"row":19,"column":45},"action":"remove","lines":["r"],"id":27},{"start":{"row":19,"column":43},"end":{"row":19,"column":44},"action":"remove","lines":["e"]},{"start":{"row":19,"column":42},"end":{"row":19,"column":43},"action":"remove","lines":["s"]},{"start":{"row":19,"column":41},"end":{"row":19,"column":42},"action":"remove","lines":["U"]}],[{"start":{"row":19,"column":41},"end":{"row":19,"column":42},"action":"insert","lines":["M"],"id":28}],[{"start":{"row":19,"column":41},"end":{"row":19,"column":42},"action":"remove","lines":["M"],"id":29},{"start":{"row":19,"column":41},"end":{"row":19,"column":48},"action":"insert","lines":["Meeting"]}],[{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"remove","lines":["r"],"id":30},{"start":{"row":17,"column":7},"end":{"row":17,"column":8},"action":"remove","lines":["e"]},{"start":{"row":17,"column":6},"end":{"row":17,"column":7},"action":"remove","lines":["s"]},{"start":{"row":17,"column":5},"end":{"row":17,"column":6},"action":"remove","lines":["U"]}],[{"start":{"row":17,"column":5},"end":{"row":17,"column":6},"action":"insert","lines":["m"],"id":31}],[{"start":{"row":17,"column":5},"end":{"row":17,"column":6},"action":"remove","lines":["m"],"id":32}],[{"start":{"row":17,"column":5},"end":{"row":17,"column":6},"action":"insert","lines":["M"],"id":33},{"start":{"row":17,"column":6},"end":{"row":17,"column":7},"action":"insert","lines":["e"]},{"start":{"row":17,"column":7},"end":{"row":17,"column":8},"action":"insert","lines":["e"]},{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"insert","lines":["t"]},{"start":{"row":17,"column":9},"end":{"row":17,"column":10},"action":"insert","lines":["i"]},{"start":{"row":17,"column":10},"end":{"row":17,"column":11},"action":"insert","lines":["n"]},{"start":{"row":17,"column":11},"end":{"row":17,"column":12},"action":"insert","lines":["g"]}],[{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"insert","lines":["m"],"id":34},{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"insert","lines":["y"]},{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"insert","lines":["_"]}],[{"start":{"row":15,"column":5},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":37},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":4},"end":{"row":17,"column":0},"action":"insert","lines":["",""]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":17,"column":4},"end":{"row":20,"column":4},"action":"insert","lines":["     public function users() {","        return $this->belongsTo('App\\User','descendant_id');","    }","    "],"id":38}],[{"start":{"row":17,"column":30},"end":{"row":17,"column":31},"action":"insert","lines":["1"],"id":39}],[{"start":{"row":18,"column":44},"end":{"row":18,"column":57},"action":"remove","lines":["descendant_id"],"id":40},{"start":{"row":18,"column":44},"end":{"row":18,"column":55},"action":"insert","lines":["ancestor_id"]}]]},"timestamp":1615602619668}