a,b=gets.split.map(&:to_i)
aa=a.to_s*b
bb=b.to_s*a
puts (aa<=>bb) < 0 ? aa : bb


###
a,b=gets.split.map(&:to_i)
puts a<b ? (a.to_s)*b : (b.to_s)*a
