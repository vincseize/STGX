<!-- https://codepen.io/odabasi/pen/vZLemb?page=2 -->

<!-- <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jstree/jstree.min.js"></script>
<link rel="stylesheet" href="css/jstree/style.min.css">
<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">

 -->

<script type="text/javascript" src="js/jstree/jstree.min.js"></script>
<link rel="stylesheet" href="css/jstree/style.min.css">

<style>
.tree{
  float:left;
  margin-right:50px
}

#undo{
    font-size: 16px;
    padding: 10px 22px !important;
    background-color: #319db5;
    color: #fff;
    box-shadow:none;
    border: none;
}

/*//

https://github.com/vakata/jstree/issues/174

https://github.com/vakata/jstree/blob/master/src/themes/responsive.less

*/
.jstree-hovered {
background-color: inherit !important;
background-color: blue;
border: 0 !important;
padding: 1px 2px !important;
}

.jstree-anchor { color:white;font-size:0.8em; }
> .jstree-striped { background:none; }

</style>



<div id="tree2" class="tree"  style=""></div>



<script>
var undo = false;
var logMap = new Array();
$(document).ready(function() {

    setTimeout(function() {

        $("#tree2").jstree("open_all");
    }, 1000);


    $('#tree2').jstree({
            'core': {
                "check_callback": true,
                'data': [{

                        "text": "Case 0001",
                        "children": [

                            {
                          "text": "case_0001_bg.jpg",
                          "type": "item",
                                          "data": {
                                            "id": "tree2item1"
                                          }
                        },



                        {
                          "text": "case_0001_layer_01.jpg",
                          "type": "item",
                                          "data": {
                                            "id": "tree2item2"

                                          }
                        },




                        {
                          "text": "case_0001_sound_ambiance.mp3",
                          "type": "item",
                                          "data": {
                                            "id": "tree2item3"

                                          }
                        },


                        {
                          "text": "case_0001_txt_01.txt",
                          "type": "item",
                                          "data": {
                                            "id": "tree2item4"

                                          }
                        }





                    ],

                        "type": "tree2",
                        "data": {
                            "id": "tree2group1"
                        }

                    },
                    {

                        "text": "Case 0002",
                        "children": [{
                          "text": "case_0002_layer_01.jpg",
                          "type": "item",
                          "data": {
                            "id": "tree2item3"
                          }
                        }],
                        "type": "tree2",
                        "data": {
                            "id": "tree2group2"
                        }

                    },
                    {

                        "text": "Case 0003",
                        "children": [],
                        "type": "tree2",
                        "data": {
                            "id": "tree2group3"
                        }

                    },
                    {

                        "text": "Case 0004",
                        "children": [],
                        "type": "tree2",
                        "data": {
                            "id": "tree2group4"
                        }

                    }
                ]
            },
            "types": {
                "#": {
                    "max_children": 1,
                    "max_depth": 2,
                    "valid_children": ["tree2"]
                },
                "tree2": {
                    "icon": "fa fa-folder",
                    "max_depth": 1,
                    "valid_children": ["item"]
                },
                "item": {
                    "icon": "fa fa-file"
                }
            },
            "plugins": ["dnd", "types"]

        })

        .on("move_node.jstree", function(e, data) {
            if (data.node.type == "item" && !undo) {
                var itemNode = data.node;
                var oldParentNode = $('#tree2').jstree(true).get_node(data.old_parent);
                var newParentNode = $('#tree2').jstree(true).get_node(data.parent);
                if (oldParentNode != newParentNode) {
                    $("#changesList").prepend('<li data-id="' + data.node.data.id + '" data-state="move"  data-oldtree="tree1" data-newtree="tree1" data-oldparentid="' + data.old_parent + '" data-newparentid="' + data.parent + '">(' + itemNode.text + ') named item was removed from  (' + oldParentNode.text + ') group and added to the (' + newParentNode.text + ")");
                }
                $("#undo").removeAttr("disabled");
            } else {
                if (data.original) {
                    data.node.data = $.extend(true, {}, data.original.data);
                }
                undo = false;
            }
        });

});


</script>
