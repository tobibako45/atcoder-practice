
def get_count(h)
    count = 1

    if (h > 1)
        # モンスターの体力が1より大きかったら、割る２の
        count += get_count((h / 2).floor) * 2
    end
    count
end

h = gets.to_i
puts get_count(h);



#############
# h = gets.to_i
#
# ans = 0
# add = 1
#
# while h > 0
#   ans += add
#   add *= 2
#   h = h / 2
# end
# p ans
