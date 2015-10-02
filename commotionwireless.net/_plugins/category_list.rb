# place this file in your plugins directory and add the tag to your sidebar
#$ cat source/_includes/custom/asides/categories.html
#<section>
# <h1>Categories</h1>
# <ul id="categories">
# {% category_list %}
# </ul>
#</section>
 
module Jekyll
  class CategoryListTag < Liquid::Tag
    def render(context)
      html = ""
      categories = context.registers[:site].categories.keys
      categories.sort.each do |category|
	category_url = category.gsub(' ','-')
        posts_in_category = context.registers[:site].categories[category].size
        html << "<li class='list-group-item'><a href='/blog/category/#{category_url}'>#{category} <span class='badge pull-right'>#{posts_in_category}</span></a></li>\n"
      end
      html
    end
  end
end
 
Liquid::Template.register_tag('category_list', Jekyll::CategoryListTag)
