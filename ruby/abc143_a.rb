a,b=gets.split.map(&:to_i)
puts [a-b*2, 0].max
##### 確かに！max()はマイナスは0を返す
