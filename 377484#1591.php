StringBuffer resultString = new StringBuffer();
Pattern regex = Pattern.compile("regex");
Matcher regexMatcher = regex.matcher(subjectString);
while (regexMatcher.find()) {
  // You can vary the replacement text for each match on-the-fly
  regexMatcher.appendReplacement(resultString, "replacement");
}
regexMatcher.appendTail(resultString);
