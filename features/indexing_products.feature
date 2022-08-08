@indexing_products
Feature: Indexing products
  In order to have products available for search
  As System Maintainer or scheduled procedure
  I want to index products into Meilisearch

  Scenario:
    Given the store operates on a single channel
    And the store has a product "PHP T-Shirt"
    When I import all Meilisearch indexes
