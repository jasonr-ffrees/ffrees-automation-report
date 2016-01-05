Feature: Fail a test
  Scenario: Fail a test and generate the relevant failure message
    Given I fail the test

  Scenario: Fail a test without a screenshot
    Given I fail the test

  @fail-multiple
  Scenario Outline: Fail multiple scenario outlines
    Given I fail the test

    Examples:
      |name |
      |1    |
      |2    |
      |3    |