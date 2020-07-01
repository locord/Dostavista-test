function get_max_popular_words(string $text, int $limit = 5): array
{
    preg_match_all('/([а-я\w]+)/ui', $text, $matches);
    $words = array_count_values($matches[0]);
    arsort($words);
    return array_slice($words, 0, $limit);
}
