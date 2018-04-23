<!-- https://codepen.io/odabasi/pen/vZLemb?page=2 -->

<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../js/jstree/jstree.min.js"></script>
<link rel="stylesheet" href="../css/jstree/style.min.css">
<link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">




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

#undo:disabled{
  background:gray;
}

 #changesList {
    float: left;
    border: 1px solid #2b2e33;
    width: 90%;
    height: 220px;
    overflow-y: auto;
    padding:5px;
}

#changesList li {
  list-style: none;
}
</style>


<div id="tree1" class="tree"></div>
<div id="tree2" class="tree"></div>
<button id="undo" disabled>UNDO</button>
<ul id="changesList"></ul>


<script>
var undo = false;
var logMap = new Array();
$(document).ready(function() {

    setTimeout(function() {
        $("#tree1").jstree("open_all");
        $("#tree2").jstree("open_all");
    }, 1000);

    $('#tree1').jstree({
            'core': {
                "check_callback": true,
                'data': [{
                    "text": "Tree 1 Group 1",
                    "children": [{
                        "text": "Tree 1 item 1",
                        "type": "item",
                        "data": {
                            "id": "tree1item1"
                        }
                    }, {
                        "text": "Tree 1 item 2",
                        "type": "item",
                        "data": {
                            "id": "tree1item2"
                        }
                    }],
                    "type": "tree1"
                }]
            },
            "types": {
                "#": {
                    "max_children": 1,
                    "max_depth": 2,
                    "valid_children": ["tree1"]
                },
                "tree1": {
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
        .on("copy_node.jstree", function(e, data) {
      console.log("asdas");
      console.log(undo);
            if (data.node.type == "item" && !undo) {
                var itemNode = data.node;
                var oldParentNode = $('#tree2').jstree(true).get_node(data.old_parent);
                var newParentNode = $('#tree1').jstree(true).get_node(data.parent);
                $("#changesList").prepend('<li data-id="' + data.original.data.id + '" data-state="copy" data-oldtree="tree2" data-newtree="tree1" data-oldparentid="' + data.old_parent + '" data-newparentid="' + data.parent + '">(' + itemNode.text + ') named item was removed from  (' + oldParentNode.text + ') group and added to the (' + newParentNode.text + ")");

                data.node.data = $.extend(true, {}, data.original.data);
                $("#undo").removeAttr("disabled");
            } else {
                if (data.original) {
                    data.node.data = $.extend(true, {}, data.original.data);
                }
                undo = false;
            }
        })
        .on("move_node.jstree", function(e, data) {
            if (data.node.type == "item" && !undo) {
                var itemNode = data.node;
                var oldParentNode = $('#tree1').jstree(true).get_node(data.old_parent);
                var newParentNode = $('#tree1').jstree(true).get_node(data.parent);
                if (oldParentNode != newParentNode) {
                    $("#undo").prepend('<li data-id="' + data.node.data.id + '" data-state="move"  data-oldtree="tree2" data-newtree="tree1" data-oldparentid="' + data.old_parent + '" data-newparentid="' + data.parent + '">(' + itemNode.text + ') named item was removed from  (' + oldParentNode.text + ') group and added to the (' + newParentNode.text + ")");
                }
                $("#undoProcess").removeAttr("disabled");
            } else {
                if (data.original) {
                    data.node.data = $.extend(true, {}, data.original.data);
                }
                undo = false;
            }
        });

    $('#tree2').jstree({
            'core': {
                "check_callback": true,
                'data': [{

                        "text": "Tree 2 Group 1",
                        "children": [{
                          "text": "Tree 2 item 1",
                          "type": "item",
                          "data": {
                            "id": "tree2item1"
                          }
                        }, {
                          "text": "Tree 2 item 2",
                          "type": "item",
                          "data": {
                            "id": "tree2item2"
                          }
                        }],
                        "type": "tree2",
                        "data": {
                            "id": "tree2group1"
                        }

                    },
                    {

                        "text": "Tree 2 Group 2",
                        "children": [{
                          "text": "Tree 2 item 3",
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

                        "text": "Tree 2 Group 3",
                        "children": [],
                        "type": "tree2",
                        "data": {
                            "id": "tree2group3"
                        }

                    },
                    {

                        "text": "Tree 2 Group 4",
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
        .on("copy_node.jstree", function(e, data) {
            if (data.node.type == "item" && !undo) {
                var itemNode = data.node;
                var oldParentNode = $('#tree1').jstree(true).get_node(data.old_parent);
                var newParentNode = $('#tree2').jstree(true).get_node(data.parent);
                $("#changesList").prepend('<li data-id="' + data.original.data.id + '" data-state="copy" data-oldtree="tree1" data-newtree="tree2" data-oldparentid="' + data.old_parent + '" data-newparentid="' + data.parent + '">(' + itemNode.text + ') named item was removed from  (' + oldParentNode.text + ') group and added to the (' + newParentNode.text + ")");
                data.node.data = $.extend(true, {}, data.original.data);
                $("#undo").removeAttr("disabled");
            } else {
                if (data.original) {
                    data.node.data = $.extend(true, {}, data.original.data);
                }
                undo = false;
            }

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

$("#undo").click(function() {

    var item = $("#changesList li:first-child");
    if (item.data("state") == "move") {

        var id = findTreeIDfromObjectID(item.data("id"));
        console.log(id);
        var newtree = item.data("newtree");
        var oldparentid = item.data("oldparentid");
        var newparentid = item.data("newparentid");
        undo = true;

        $("#tree2").jstree("move_node", id, oldparentid, 0);
        item.remove();
        var item = $("#changesList li:first-child");
        if (!item.length) {
            $("#undoProcess").attr("disabled", "disabled");
        }

    } else if (item.data("state") == "copy") {

        var id = findTreeIDfromObjectID(item.data("id"));
        console.log(id);
        var oldtree = item.data("oldtree");
        var newtree = item.data("newtree");
        var oldparentid = item.data("oldparentid");
        var newparentid = item.data("newparentid");
        undo = true;

        var tree1 = $('#tree1').jstree(true);
        var tree2 = $('#tree2').jstree(true);

        if (oldtree == "tree1") {
            tree1.move_node(tree2.get_node(id), tree1.get_node(oldparentid));
        } else if (oldtree == "tree2") {
            tree2.move_node(tree1.get_node(id), tree2.get_node(oldparentid));
        }

        item.remove();
        var item = $("#changesList li:first-child");
        if (!item.length) {
            $("#undoProcess").attr("disabled", "disabled");
        }

    }

});

function findTreeIDfromObjectID(objectID) {

    var treeObj = $('#tree1').data().jstree.get_json();
    for (var k = 0; k < treeObj.length; k++) {
        for (var i = 0; i < treeObj[k].children.length; i++) {
            if (treeObj[k].children[i].data.id == objectID) {
                return treeObj[k].children[i].id;
            }
        }
    }

    var treeObj = $('#tree2').data().jstree.get_json();
    for (var k = 0; k < treeObj.length; k++) {
        for (var i = 0; i < treeObj[k].children.length; i++) {
            if (treeObj[k].children[i].data.id == objectID) {
                return treeObj[k].children[i].id;
            }
        }
    }

}
</script>
