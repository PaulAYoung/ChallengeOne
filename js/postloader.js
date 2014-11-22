function postLoader(url, node){
    this.url = url;
    this.postDiv = $(node);
    this.postnode = this.postDiv.find(".heifer-post-feed");
    this.filterNode = this.postDiv.find(".heifer-filters-list");
    this.postDiv.find(".heifer-filters-clear").click($.proxy(this.clearFilters, this));
    this.filters = [];
    this.getPosts();
    
}

postLoader.prototype.getPosts = function(args){
    $.getJSON(this.url, args, $.proxy(function(d){
        this.posts = d;
        this.onLoad();
    }, this));
};

postLoader.prototype.clearFilters = function(){
    this.filters = [];
    this.filterRefresh();
    this.filterNode.html("None");
    this.loadPosts(this.posts);
}

postLoader.prototype.onLoad = function(){
    this.loadPosts(this.posts);
};

postLoader.prototype.loadPosts = function(posts){
    posts.forEach($.proxy(function(d){
            var post = $(shortPost(d));
            post.hide();
            this.postnode.append(post);
            post.slideDown();
        }, this)
    );
    $(".heifer-tag-filter").click($.proxy(this.tagClick, this));
};

postLoader.prototype.clearPosts = function(){
    this.postnode.empty();
};

postLoader.prototype.filterPosts = function(){
    var posts = this.posts.slice(0);
    this.filters.forEach(function(filter){
        var filtered = [];
        posts.forEach(function(p){
            if (p[filter.type].indexOf(filter.value) >= 0){
                    filtered.push(p);
                }
            posts = filtered;
        });
    });
    this.clearPosts();
    this.loadPosts(posts);
};

postLoader.prototype.filterRefresh = function(){
    this.filterNode.children().slideUp();
    this.filterNode.empty();
    this.filters.forEach($.proxy(function(f){
        if (typeof f.image !== 'undefined'){
            var filter = $('<img class="heifer-tag-image heifer-filter" src="' + f.image + '" data-value="' + f.value + '">');
        }else{
            var filter = $('<span class="heifer-tag-text heifer-filter" data-value="' + f.value + '">' + f.value + "</span>");
        }
        filter.hide();
        this.filterNode.append(filter);
        filter.slideDown();
    }, this));

    this.filterNode.find(".heifer-filter").click($.proxy(this.filterClick, this));
}

postLoader.prototype.tagClick = function(e){
    e.preventDefault();
    var tag = e.target.dataset;
    this.filterAdd(tag);
    this.filterRefresh();
    this.filterPosts();
};

postLoader.prototype.filterClick = function(e){
    var filter = e.target.dataset.value;
    var new_filters = [];
    $(e.target).slideUp().remove()
    this.filters = this.filters.map(function(f){
        if (f.value !== filter){new_filters.push(f)}
    });
    this.filters = new_filters;
    this.filterPosts();
};

postLoader.prototype.filterAdd = function(filter){
    console.log(filter);
    if (typeof filter.type === 'undefined' || typeof filter.value === 'undefined'){
        return;
    }
    var filters = this.filters.map(function (f){return f.value + f.type;});
    if (filters.indexOf(filter.value + filter.type)<0){
        this.filters.push(filter);
    }
}

function formatPost(post){
    // takes a post and outputs a nice view of it. 
    var processed = post.post.map(function(d){
        if (typeof d !== 'object'){
            return d;
        }
    if (d.type === "image"){
        return '<img src="' + d.url + '">';
    }
        return d;
    });

    return processed.join();
}

function shortPost(post){
    var out = '<div class="heifer-post">' +
            '<div class="heifer-post-title">' +
                post.title +
            '</div>';

    for (var idx=0;idx<post.post.length; idx++){
        if (typeof post.post[idx] === "object" &&
                post.post[idx].type === "image"){
                out = out +
                    '<div class="heifer-post-image">' +
                        '<img class="heifer-post-image" src="' + post.post[idx].url + '">' +
                    '</div>';
                    break;
            }
    }
    

    out = out + '<div class="heifer-post-tags">' +
            '<img src="images/' + post.region[0].replace(" ", "") + '.png" data-type="region" data-image=' +
            '"images/' + post.region[0].replace(" ", "") + '.png" data-value="' + post.region[0] + '" class="heifer-tag-filter heifer-tag-image">';
    
    post.tags.forEach(function(t){
        out = out + '<img src="images/' + t + '.png" data-value="' + t + '" data-type="tags" data-image="images/' + t + '.png" class="heifer-tag-filter heifer-tag-image">'
    });
    out = out + '</div>';


    out = out + '<div class="heifer-post-desc">' +
                post.description +
            '</div>';

    out = out + '<div class = "heifer-comments">' +
        '<textarea type="text" class="form-control heifer-comment-form" placeholder="Comments..."/>' +
        '</div>';

    out = out + '</div>';

    return out;
}
