{"filter":false,"title":"CreatesController.php","tooltip":"/cms/app/Http/Controllers/CreatesController.php","undoManager":{"mark":99,"position":99,"stack":[[{"start":{"row":31,"column":24},"end":{"row":31,"column":25},"action":"remove","lines":["s"],"id":2},{"start":{"row":31,"column":23},"end":{"row":31,"column":24},"action":"remove","lines":["g"]},{"start":{"row":31,"column":22},"end":{"row":31,"column":23},"action":"remove","lines":["n"]},{"start":{"row":31,"column":21},"end":{"row":31,"column":22},"action":"remove","lines":["i"]},{"start":{"row":31,"column":20},"end":{"row":31,"column":21},"action":"remove","lines":["t"]},{"start":{"row":31,"column":19},"end":{"row":31,"column":20},"action":"remove","lines":["e"]},{"start":{"row":31,"column":18},"end":{"row":31,"column":19},"action":"remove","lines":["e"]},{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"remove","lines":["m"]}],[{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"insert","lines":["m"],"id":3},{"start":{"row":31,"column":18},"end":{"row":31,"column":19},"action":"insert","lines":["e"]},{"start":{"row":31,"column":19},"end":{"row":31,"column":20},"action":"insert","lines":["e"]},{"start":{"row":31,"column":20},"end":{"row":31,"column":21},"action":"insert","lines":["t"]}],[{"start":{"row":31,"column":17},"end":{"row":31,"column":21},"action":"remove","lines":["meet"],"id":4},{"start":{"row":31,"column":17},"end":{"row":31,"column":32},"action":"insert","lines":["meeting_creates"]}],[{"start":{"row":39,"column":0},"end":{"row":50,"column":5},"action":"insert","lines":["    public function index()","    {","    $creates = DB::select('select * from creates ORDER BY updated_at DESC LIMIT 1');","    $meetings = Meeting::get();","    $auths = Auth::user();","    ","    // E","","        ","    return view('meeting_creates',compact('creates','meetings','auths'));","        ","    }"],"id":5}],[{"start":{"row":39,"column":25},"end":{"row":39,"column":26},"action":"insert","lines":["2"],"id":6}],[{"start":{"row":48,"column":31},"end":{"row":48,"column":32},"action":"remove","lines":["s"],"id":7},{"start":{"row":48,"column":30},"end":{"row":48,"column":31},"action":"remove","lines":["e"]},{"start":{"row":48,"column":29},"end":{"row":48,"column":30},"action":"remove","lines":["t"]},{"start":{"row":48,"column":28},"end":{"row":48,"column":29},"action":"remove","lines":["a"]},{"start":{"row":48,"column":27},"end":{"row":48,"column":28},"action":"remove","lines":["e"]},{"start":{"row":48,"column":26},"end":{"row":48,"column":27},"action":"remove","lines":["r"]},{"start":{"row":48,"column":25},"end":{"row":48,"column":26},"action":"remove","lines":["c"]},{"start":{"row":48,"column":24},"end":{"row":48,"column":25},"action":"remove","lines":["_"]}],[{"start":{"row":48,"column":24},"end":{"row":48,"column":25},"action":"insert","lines":["s"],"id":8}],[{"start":{"row":7,"column":26},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":9}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":26},"action":"insert","lines":["use App\\Meeting;//この行を上に追加"],"id":10}],[{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"remove","lines":["g"],"id":11},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"remove","lines":["n"]},{"start":{"row":8,"column":12},"end":{"row":8,"column":13},"action":"remove","lines":["i"]},{"start":{"row":8,"column":11},"end":{"row":8,"column":12},"action":"remove","lines":["t"]},{"start":{"row":8,"column":10},"end":{"row":8,"column":11},"action":"remove","lines":["e"]},{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"remove","lines":["e"]},{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"remove","lines":["M"]}],[{"start":{"row":8,"column":8},"end":{"row":8,"column":9},"action":"insert","lines":["T"],"id":12},{"start":{"row":8,"column":9},"end":{"row":8,"column":10},"action":"insert","lines":["r"]},{"start":{"row":8,"column":10},"end":{"row":8,"column":11},"action":"insert","lines":["e"]}],[{"start":{"row":8,"column":8},"end":{"row":8,"column":11},"action":"remove","lines":["Tre"],"id":13},{"start":{"row":8,"column":8},"end":{"row":8,"column":17},"action":"insert","lines":["Tree_path"]}],[{"start":{"row":26,"column":0},"end":{"row":27,"column":26},"action":"remove","lines":["    $meetings = Meeting::get();","    $auths = Auth::user();"],"id":61},{"start":{"row":26,"column":0},"end":{"row":27,"column":92},"action":"insert","lines":["    $user_id = Auth::id();","    $tree_paths = DB::select('select * from tree_paths WHERE ancestor_id=\" . $user_id . \"');"]}],[{"start":{"row":32,"column":64},"end":{"row":32,"column":69},"action":"remove","lines":["auths"],"id":62},{"start":{"row":32,"column":64},"end":{"row":32,"column":74},"action":"insert","lines":["tree_paths"]}],[{"start":{"row":26,"column":26},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":63},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":27,"column":4},"end":{"row":27,"column":21},"action":"insert","lines":["dd($request->id);"],"id":64}],[{"start":{"row":27,"column":7},"end":{"row":27,"column":19},"action":"remove","lines":["$request->id"],"id":65},{"start":{"row":27,"column":7},"end":{"row":27,"column":16},"action":"insert","lines":["$user_id "]}],[{"start":{"row":27,"column":4},"end":{"row":27,"column":18},"action":"remove","lines":["dd($user_id );"],"id":66}],[{"start":{"row":29,"column":4},"end":{"row":29,"column":18},"action":"insert","lines":["dd($user_id );"],"id":67}],[{"start":{"row":29,"column":7},"end":{"row":29,"column":15},"action":"remove","lines":["$user_id"],"id":69},{"start":{"row":29,"column":7},"end":{"row":29,"column":18},"action":"insert","lines":["$tree_paths"]}],[{"start":{"row":29,"column":18},"end":{"row":29,"column":22},"action":"insert","lines":["->id"],"id":70}],[{"start":{"row":29,"column":22},"end":{"row":29,"column":23},"action":"remove","lines":[" "],"id":71}],[{"start":{"row":29,"column":21},"end":{"row":29,"column":22},"action":"remove","lines":["d"],"id":93}],[{"start":{"row":29,"column":20},"end":{"row":29,"column":21},"action":"remove","lines":["i"],"id":94},{"start":{"row":29,"column":19},"end":{"row":29,"column":20},"action":"remove","lines":[">"]},{"start":{"row":29,"column":18},"end":{"row":29,"column":19},"action":"remove","lines":["-"]}],[{"start":{"row":26,"column":4},"end":{"row":26,"column":7},"action":"insert","lines":["SET"],"id":95}],[{"start":{"row":26,"column":7},"end":{"row":26,"column":8},"action":"insert","lines":["　"],"id":96}],[{"start":{"row":26,"column":7},"end":{"row":26,"column":8},"action":"remove","lines":["　"],"id":97}],[{"start":{"row":26,"column":7},"end":{"row":26,"column":8},"action":"insert","lines":[" "],"id":98}],[{"start":{"row":26,"column":4},"end":{"row":26,"column":8},"action":"remove","lines":["SET "],"id":99}],[{"start":{"row":28,"column":73},"end":{"row":28,"column":89},"action":"remove","lines":["\" . $user_id . \""],"id":100},{"start":{"row":28,"column":73},"end":{"row":28,"column":89},"action":"insert","lines":["\" . $user_id . \""]},{"start":{"row":28,"column":73},"end":{"row":28,"column":89},"action":"remove","lines":["\" . $user_id . \""]},{"start":{"row":28,"column":73},"end":{"row":28,"column":74},"action":"insert","lines":["５"]},{"start":{"row":28,"column":73},"end":{"row":28,"column":74},"action":"remove","lines":["５"]},{"start":{"row":28,"column":73},"end":{"row":28,"column":74},"action":"insert","lines":["5"]},{"start":{"row":28,"column":73},"end":{"row":28,"column":74},"action":"remove","lines":["5"]},{"start":{"row":28,"column":73},"end":{"row":28,"column":74},"action":"insert","lines":["5"]}],[{"start":{"row":28,"column":27},"end":{"row":28,"column":28},"action":"remove","lines":["t"],"id":101},{"start":{"row":28,"column":26},"end":{"row":28,"column":27},"action":"remove","lines":["c"]},{"start":{"row":28,"column":25},"end":{"row":28,"column":26},"action":"remove","lines":["e"]},{"start":{"row":28,"column":24},"end":{"row":28,"column":25},"action":"remove","lines":["l"]},{"start":{"row":28,"column":23},"end":{"row":28,"column":24},"action":"remove","lines":["e"]},{"start":{"row":28,"column":22},"end":{"row":28,"column":23},"action":"remove","lines":["s"]}],[{"start":{"row":28,"column":22},"end":{"row":28,"column":23},"action":"insert","lines":["t"],"id":102},{"start":{"row":28,"column":23},"end":{"row":28,"column":24},"action":"insert","lines":["a"]},{"start":{"row":28,"column":24},"end":{"row":28,"column":25},"action":"insert","lines":["b"]}],[{"start":{"row":28,"column":22},"end":{"row":28,"column":25},"action":"remove","lines":["tab"],"id":103},{"start":{"row":28,"column":22},"end":{"row":28,"column":27},"action":"insert","lines":["table"]}],[{"start":{"row":28,"column":35},"end":{"row":28,"column":36},"action":"insert","lines":["'"],"id":104}],[{"start":{"row":28,"column":36},"end":{"row":28,"column":37},"action":"insert","lines":[")"],"id":105}],[{"start":{"row":28,"column":37},"end":{"row":28,"column":38},"action":"remove","lines":[" "],"id":106},{"start":{"row":28,"column":37},"end":{"row":29,"column":0},"action":"insert","lines":["",""]},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"remove","lines":["    "],"id":107},{"start":{"row":28,"column":37},"end":{"row":29,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":28,"column":34},"end":{"row":28,"column":35},"action":"remove","lines":["t"],"id":108},{"start":{"row":28,"column":33},"end":{"row":28,"column":34},"action":"remove","lines":["c"]},{"start":{"row":28,"column":32},"end":{"row":28,"column":33},"action":"remove","lines":["e"]},{"start":{"row":28,"column":31},"end":{"row":28,"column":32},"action":"remove","lines":["l"]},{"start":{"row":28,"column":30},"end":{"row":28,"column":31},"action":"remove","lines":["e"]},{"start":{"row":28,"column":29},"end":{"row":28,"column":30},"action":"remove","lines":["s"]}],[{"start":{"row":28,"column":29},"end":{"row":28,"column":39},"action":"insert","lines":["tree_paths"],"id":109}],[{"start":{"row":28,"column":41},"end":{"row":28,"column":43},"action":"insert","lines":["=>"],"id":110}],[{"start":{"row":28,"column":43},"end":{"row":28,"column":44},"action":"insert","lines":["e"],"id":111}],[{"start":{"row":28,"column":43},"end":{"row":28,"column":44},"action":"remove","lines":["e"],"id":112}],[{"start":{"row":28,"column":43},"end":{"row":28,"column":44},"action":"insert","lines":["w"],"id":113},{"start":{"row":28,"column":44},"end":{"row":28,"column":45},"action":"insert","lines":["h"]},{"start":{"row":28,"column":45},"end":{"row":28,"column":46},"action":"insert","lines":["e"]},{"start":{"row":28,"column":46},"end":{"row":28,"column":47},"action":"insert","lines":["r"]}],[{"start":{"row":28,"column":47},"end":{"row":28,"column":48},"action":"insert","lines":["e"],"id":114}],[{"start":{"row":28,"column":48},"end":{"row":28,"column":49},"action":"insert","lines":["("],"id":115}],[{"start":{"row":28,"column":49},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":116},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"remove","lines":["    "],"id":117},{"start":{"row":28,"column":49},"end":{"row":29,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":28,"column":39},"end":{"row":28,"column":40},"action":"remove","lines":["'"],"id":118},{"start":{"row":28,"column":39},"end":{"row":28,"column":40},"action":"insert","lines":["'"]}],[{"start":{"row":28,"column":49},"end":{"row":28,"column":52},"action":"remove","lines":["* f"],"id":119},{"start":{"row":28,"column":49},"end":{"row":28,"column":61},"action":"insert","lines":["'tree_paths'"]}],[{"start":{"row":28,"column":50},"end":{"row":28,"column":60},"action":"remove","lines":["tree_paths"],"id":120},{"start":{"row":28,"column":50},"end":{"row":28,"column":61},"action":"insert","lines":["ancestor_id"]}],[{"start":{"row":28,"column":62},"end":{"row":28,"column":93},"action":"remove","lines":["rom tree_paths WHERE ancestor_i"],"id":122},{"start":{"row":28,"column":62},"end":{"row":28,"column":63},"action":"remove","lines":["d"]},{"start":{"row":28,"column":62},"end":{"row":28,"column":63},"action":"remove","lines":["="]},{"start":{"row":28,"column":62},"end":{"row":28,"column":63},"action":"remove","lines":["5"]},{"start":{"row":28,"column":62},"end":{"row":28,"column":63},"action":"remove","lines":["'"]}],[{"start":{"row":28,"column":62},"end":{"row":28,"column":63},"action":"insert","lines":[","],"id":123}],[{"start":{"row":28,"column":63},"end":{"row":28,"column":64},"action":"insert","lines":[" "],"id":124}],[{"start":{"row":28,"column":63},"end":{"row":28,"column":64},"action":"remove","lines":[" "],"id":125}],[{"start":{"row":28,"column":63},"end":{"row":28,"column":71},"action":"insert","lines":["$user_id"],"id":126}],[{"start":{"row":29,"column":20},"end":{"row":29,"column":21},"action":"insert","lines":["-"],"id":127}],[{"start":{"row":29,"column":20},"end":{"row":29,"column":21},"action":"remove","lines":["-"],"id":128}],[{"start":{"row":28,"column":72},"end":{"row":28,"column":73},"action":"insert","lines":["-"],"id":129}],[{"start":{"row":28,"column":73},"end":{"row":28,"column":74},"action":"insert","lines":["."],"id":130}],[{"start":{"row":28,"column":73},"end":{"row":28,"column":74},"action":"remove","lines":["."],"id":131}],[{"start":{"row":28,"column":73},"end":{"row":28,"column":74},"action":"insert","lines":[">"],"id":132}],[{"start":{"row":28,"column":74},"end":{"row":28,"column":75},"action":"insert","lines":["g"],"id":133},{"start":{"row":28,"column":75},"end":{"row":28,"column":76},"action":"insert","lines":["e"]},{"start":{"row":28,"column":76},"end":{"row":28,"column":77},"action":"insert","lines":["t"]}],[{"start":{"row":28,"column":77},"end":{"row":28,"column":79},"action":"insert","lines":["()"],"id":134}],[{"start":{"row":28,"column":79},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":135},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"remove","lines":["    "],"id":136},{"start":{"row":28,"column":79},"end":{"row":29,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":28,"column":42},"end":{"row":28,"column":43},"action":"remove","lines":[">"],"id":137},{"start":{"row":28,"column":41},"end":{"row":28,"column":42},"action":"remove","lines":["="]}],[{"start":{"row":28,"column":41},"end":{"row":28,"column":42},"action":"insert","lines":["-"],"id":138},{"start":{"row":28,"column":42},"end":{"row":28,"column":43},"action":"insert","lines":[">"]}],[{"start":{"row":29,"column":0},"end":{"row":29,"column":20},"action":"remove","lines":["    dd($tree_paths);"],"id":139}],[{"start":{"row":29,"column":0},"end":{"row":29,"column":17},"action":"insert","lines":["dd($request->id);"],"id":140}],[{"start":{"row":29,"column":3},"end":{"row":29,"column":11},"action":"remove","lines":["$request"],"id":141},{"start":{"row":29,"column":3},"end":{"row":29,"column":14},"action":"insert","lines":["$tree_paths"]}],[{"start":{"row":29,"column":17},"end":{"row":29,"column":18},"action":"remove","lines":["d"],"id":143},{"start":{"row":29,"column":16},"end":{"row":29,"column":17},"action":"remove","lines":["i"]},{"start":{"row":29,"column":15},"end":{"row":29,"column":16},"action":"remove","lines":[">"]},{"start":{"row":29,"column":14},"end":{"row":29,"column":15},"action":"remove","lines":["-"]}],[{"start":{"row":29,"column":0},"end":{"row":29,"column":16},"action":"remove","lines":["dd($tree_paths);"],"id":144},{"start":{"row":29,"column":0},"end":{"row":30,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"remove","lines":["    "],"id":145},{"start":{"row":29,"column":0},"end":{"row":29,"column":1},"action":"remove","lines":["/"]},{"start":{"row":29,"column":0},"end":{"row":29,"column":1},"action":"remove","lines":["/"]},{"start":{"row":29,"column":0},"end":{"row":29,"column":1},"action":"remove","lines":[" "]},{"start":{"row":29,"column":0},"end":{"row":29,"column":1},"action":"remove","lines":["E"]},{"start":{"row":29,"column":0},"end":{"row":30,"column":0},"action":"remove","lines":["",""]},{"start":{"row":29,"column":0},"end":{"row":30,"column":8},"action":"remove","lines":["","        "]},{"start":{"row":29,"column":0},"end":{"row":30,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"remove","lines":["    "],"id":146},{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":28,"column":0},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":147}],[{"start":{"row":42,"column":0},"end":{"row":44,"column":0},"action":"remove","lines":["    ","    // E",""],"id":148},{"start":{"row":42,"column":0},"end":{"row":43,"column":8},"action":"remove","lines":["","        "]}],[{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"remove","lines":["    "],"id":149},{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":43,"column":66},"end":{"row":44,"column":0},"action":"remove","lines":["",""],"id":150}],[{"start":{"row":41,"column":26},"end":{"row":42,"column":0},"action":"remove","lines":["",""],"id":151}],[{"start":{"row":39,"column":0},"end":{"row":39,"column":84},"action":"remove","lines":["    $creates = DB::select('select * from creates ORDER BY updated_at DESC LIMIT 1');"],"id":152}],[{"start":{"row":39,"column":0},"end":{"row":39,"column":35},"action":"insert","lines":["$data = Item::with('stock')->get();"],"id":153}],[{"start":{"row":39,"column":0},"end":{"row":39,"column":1},"action":"insert","lines":[" "],"id":154},{"start":{"row":39,"column":1},"end":{"row":39,"column":2},"action":"insert","lines":[" "]},{"start":{"row":39,"column":2},"end":{"row":39,"column":3},"action":"insert","lines":[" "]},{"start":{"row":39,"column":3},"end":{"row":39,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":39,"column":3},"end":{"row":39,"column":39},"action":"remove","lines":[" $data = Item::with('stock')->get();"],"id":155},{"start":{"row":39,"column":3},"end":{"row":39,"column":30},"action":"insert","lines":["$meetings = Meeting::get();"]}],[{"start":{"row":39,"column":2},"end":{"row":39,"column":3},"action":"insert","lines":[" "],"id":156}],[{"start":{"row":39,"column":5},"end":{"row":39,"column":13},"action":"remove","lines":["meetings"],"id":157},{"start":{"row":39,"column":5},"end":{"row":39,"column":14},"action":"insert","lines":["tree_path"]}],[{"start":{"row":39,"column":14},"end":{"row":39,"column":15},"action":"insert","lines":["a"],"id":158}],[{"start":{"row":39,"column":14},"end":{"row":39,"column":15},"action":"remove","lines":["a"],"id":159}],[{"start":{"row":39,"column":14},"end":{"row":39,"column":15},"action":"insert","lines":["s"],"id":160}],[{"start":{"row":39,"column":18},"end":{"row":39,"column":25},"action":"remove","lines":["Meeting"],"id":161}],[{"start":{"row":39,"column":18},"end":{"row":39,"column":19},"action":"insert","lines":["T"],"id":162},{"start":{"row":39,"column":19},"end":{"row":39,"column":20},"action":"insert","lines":["r"]},{"start":{"row":39,"column":20},"end":{"row":39,"column":21},"action":"insert","lines":["e"]},{"start":{"row":39,"column":21},"end":{"row":39,"column":22},"action":"insert","lines":["e"]}],[{"start":{"row":39,"column":18},"end":{"row":39,"column":22},"action":"remove","lines":["Tree"],"id":163},{"start":{"row":39,"column":18},"end":{"row":39,"column":27},"action":"insert","lines":["Tree_path"]}],[{"start":{"row":42,"column":63},"end":{"row":42,"column":71},"action":"insert","lines":[",'auths'"],"id":165}],[{"start":{"row":42,"column":65},"end":{"row":42,"column":70},"action":"remove","lines":["auths"],"id":166},{"start":{"row":42,"column":65},"end":{"row":42,"column":75},"action":"insert","lines":["tree_paths"]}],[{"start":{"row":38,"column":5},"end":{"row":39,"column":0},"action":"insert","lines":["",""],"id":167},{"start":{"row":39,"column":0},"end":{"row":39,"column":8},"action":"insert","lines":["        "]},{"start":{"row":39,"column":8},"end":{"row":40,"column":0},"action":"insert","lines":["",""]},{"start":{"row":40,"column":0},"end":{"row":40,"column":8},"action":"insert","lines":["        "]},{"start":{"row":40,"column":8},"end":{"row":41,"column":0},"action":"insert","lines":["",""]},{"start":{"row":41,"column":0},"end":{"row":41,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":39,"column":8},"end":{"row":42,"column":1},"action":"insert","lines":["$users = userevent->users;","foreach ($users as $user) {","    $user->name;","}"],"id":168}],[{"start":{"row":40,"column":0},"end":{"row":40,"column":1},"action":"insert","lines":[" "],"id":169},{"start":{"row":40,"column":1},"end":{"row":40,"column":2},"action":"insert","lines":[" "]},{"start":{"row":40,"column":2},"end":{"row":40,"column":3},"action":"insert","lines":[" "]},{"start":{"row":40,"column":3},"end":{"row":40,"column":4},"action":"insert","lines":[" "]},{"start":{"row":40,"column":4},"end":{"row":40,"column":5},"action":"insert","lines":[" "]}],[{"start":{"row":42,"column":0},"end":{"row":42,"column":1},"action":"insert","lines":[" "],"id":170},{"start":{"row":42,"column":1},"end":{"row":42,"column":2},"action":"insert","lines":[" "]},{"start":{"row":42,"column":2},"end":{"row":42,"column":3},"action":"insert","lines":[" "]},{"start":{"row":42,"column":3},"end":{"row":42,"column":4},"action":"insert","lines":[" "]},{"start":{"row":42,"column":4},"end":{"row":42,"column":5},"action":"insert","lines":[" "]},{"start":{"row":42,"column":5},"end":{"row":42,"column":6},"action":"insert","lines":[" "]}],[{"start":{"row":41,"column":3},"end":{"row":41,"column":4},"action":"remove","lines":[" "],"id":171},{"start":{"row":41,"column":3},"end":{"row":41,"column":4},"action":"insert","lines":[" "]},{"start":{"row":41,"column":4},"end":{"row":41,"column":5},"action":"insert","lines":[" "]},{"start":{"row":41,"column":5},"end":{"row":41,"column":6},"action":"insert","lines":[" "]},{"start":{"row":41,"column":6},"end":{"row":41,"column":7},"action":"insert","lines":[" "]}],[{"start":{"row":39,"column":17},"end":{"row":39,"column":26},"action":"remove","lines":["userevent"],"id":172},{"start":{"row":39,"column":17},"end":{"row":39,"column":30},"action":"insert","lines":["my_tree_paths"]}],[{"start":{"row":39,"column":0},"end":{"row":42,"column":7},"action":"remove","lines":["        $users = my_tree_paths->users;","     foreach ($users as $user) {","       $user->name;","      }"],"id":173},{"start":{"row":39,"column":0},"end":{"row":40,"column":8},"action":"remove","lines":["","        "]},{"start":{"row":39,"column":0},"end":{"row":40,"column":8},"action":"remove","lines":["","        "]}]]},"ace":{"folds":[],"scrolltop":960,"scrollleft":0,"selection":{"start":{"row":34,"column":5},"end":{"row":34,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":17,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1615980422821,"hash":"be7fa4b297ee52577a0f457fe7e8dce2ee186d61"}