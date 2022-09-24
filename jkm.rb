require 'json'

file = File.read('./data.json')
data_hash = JSON.parse(file)

statement =
    data_hash["introductions"].sample +
    data_hash["who"].sample +
    data_hash["how"].sample +
    data_hash["what"].sample +
    data_hash["culminations"].sample

puts statement

