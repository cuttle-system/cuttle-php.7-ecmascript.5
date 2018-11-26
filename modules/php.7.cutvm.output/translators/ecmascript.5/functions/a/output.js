b s string
b s in_a
c 2 0 array
b i 1
c 2 2 get_element
c 1 1 getvar
b s string
b s true
c 2 0 array
b i 1
c 2 2 get_element
c 2 2 ==
c 1 1 not
g > endif0
b s f
b s atom
b s (
c 2 0 array
b s f
b s atom
b s b
c 2 0 array
c 2 0 array
b s macro_p
b s _args
c 2 0 array
b s f
b s atom
b s )
c 2 0 array
c 2 0 array
c 5 0 array
b b true
g > else_endif0
l endif0
b s string
b s in_a
c 2 0 array
b i 1
c 2 2 get_element
b s string
b s true
c 2 0 array
b i 1
c 2 2 get_element
c 2 2 setvar
b s f
b s atom
b s (
c 2 0 array
b s f
b s atom
b s c
c 2 0 array
c 2 0 array
b s macro_p
b s _args
c 2 0 array
b s f
b s atom
b s )
c 2 0 array
c 2 0 array
c 5 0 array
l else_endif0