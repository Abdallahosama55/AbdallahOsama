#Name : AbdallahOsama mohamed
#ID: 20198053
NO_OF_CHARS = 2565555
#1-bad_suffix with boyer moor alghorithm
#Preprocessing
def heuristic_func(st, size):
		
	bad_char = [-1]*NO_OF_CHARS
	
	for i in range(size):
		bad_char[ord(st[i])] = i;
	
	return bad_char

def bad_suffix_search(text, pattern):	
	pat_Length= len(pattern)
	txt_Length = len(text)
	
	badChar = heuristic_func(pattern, pat_Length)


	s = 0
	while(s <= txt_Length-pat_Length):
		j = pat_Length-1

	
		while j>=0 and pattern[j] == text[s+j]:
			j -= 1

	
		if j<0:
			print("Pattern occur at shift = {}".format(s))

		
			s += (pat_Length-badChar[ord(text[s+pat_Length])] if s+pat_Length<txt_Length else 1)
		else:
			
			s += max(1, j-badChar[ord(text[s+j])])
##################################################################################################
#2- good suffix 

def preprocess_strong_suffix(shift, b_pos, pattern, pat_Length):


	i = pat_Length
	j = pat_Length + 1
	b_pos[i] = j

	while i > 0:

		while j <= pat_Length and pattern[i - 1] != pattern[j - 1]:
						
			if shift[j] == 0:
				shift[j] = j - i
			j = b_pos[j]
		i -= 1
		j -= 1
		b_pos[i] = j
# Preprocessing for case 2
def preprocess_case2(shift, pos, pattern, pat_Length):
	j = pos[0]
	for i in range(pat_Length + 1):		
		if shift[i] == 0:
			shift[i] = j
		if i == j:
			j = pos[j]
def good_suffix_search(text, pattern):


	s = 0
	pat_Length = len(pattern)
	txt_Length = len(text)

	b_pos = [0] * (pat_Length + 1)

	# initialize all occurrence of shift to 0
	shift = [0] * (pat_Length + 1)

	# do preprocessing
	preprocess_strong_suffix(shift, b_pos, pattern, pat_Length)
	preprocess_case2(shift, b_pos, pattern, pat_Length)

	while s <=txt_Length - pat_Length:
		j = pat_Length - 1
		
		while j >= 0 and pattern[j] == text[s + j]:
			j -= 1
			
		if j < 0:
			print("pattern occurs at shift = %d" % s)
			s += shift[0]
		else:
			
			s += shift[j + 1]
def main():
    txt = "AAAHABAAATCDNS"
    pat = "ATC"
    bad_suffix_search(txt, pat)
    good_suffix_search(txt, pat)
 
if __name__ == '__main__':
    main()


