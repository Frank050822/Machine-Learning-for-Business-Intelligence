create table sales(
    SELECT *
    FROM sales_2015
    UNION ALL
    SELECT *
    FROM sales_2016
    union all
    select *
    from sales_2017
);

create table is_comb1_sales_customers as
	SELECT Customers.*, is_sales.OrderDate, is_sales.StockDate, is_sales.OrderNumber,
	       is_sales.ProductKey, is_sales.OrderLineItem, is_sales.OrderQuantity,
	       is_sales.Shipping_Date
	FROM Customers
	INNER JOIN is_sales
	on Customers.CustomerKey = is_sales.CustomerKey;

CREATE table is_comb2_comb1_products as
    SELECT is_comb1_sales_customers.*, products.ProductSubcategoryKey, products.ProductSKU,
           products.ProductName, products.ModelName, products.ProductDescription,
           products.ProductColor, products.ProductSize, products.ProductStyle,
           products.ProductCost, products.ProductPrice
    FROM is_comb1_sales_customers
    INNER JOIN products on is_comb1_sales_customers.ProductKey = products.ProductKey;

CREATE table is_comb3_category_key as
    select is_comb2_comb1_products.*, `product-subcategories`.ProductCategoryKey
    from is_comb2_comb1_products
    left join `product-subcategories`
    on is_comb2_comb1_products.ProductSubcategoryKey = `product-subcategories`.ProductSubcategoryKey;

# create table is_comb4_comb3_returns as
#     select is_comb3_category_key.*, returns.ReturnDate, returns.ReturnQuantity, returns.TerritoryKey
#     from is_comb3_category_key
#     inner join returns
#     on is_comb3_category_key.ProductKey = returns.ProductKey;

create table is_comb4_comb3_geo(
    select is_comb3_category_key.*,
           geo.city,
           city_ascii,
           state_id,
           state_name,
           Region,
           county_fips,
           county_name,
           lat,
           lng,
           source_,
           timezone,
           zips
    from geo
             inner join is_comb3_category_key
                        on is_comb3_category_key.Location_ID = geo.Location_ID
);

select is_comb3_category_key.*
from is_comb3_category_key
where is_comb3_category_key.Location_ID not in(
    select geo.Location_ID from geo
    where 1 = 1
);

select is_comb4_comb3_geo.*, population_data.Place_Name, State, `State Abbreviation`, County,
       Latitude, Longitude, Population
from population_data
inner join is_comb4_comb3_geo
where population_data.Zip_Code = is_comb4_comb3_geo.zips;

SELECT is_comb3_category_key.CustomerKey
from is_comb3_category_key where is_comb3_category_key.CustomerKey not in(
    select is_comb4_comb3_geo.CustomerKey from is_comb4_comb3_geo where 1 = 1
    );

select count(distinct Location_ID) from geo;
# 12217
select count(distinct Location_ID) FROM is_comb3_category_key;
# 9255
select count(distinct Location_ID) from customers;
# 9420



create database Frank_IS;

use Frank_IS;

create table customers_products as
	SELECT Customers.*, sales_2017.OrderDate, StockDate, OrderNumber, sales_2017.ProductKey,
	       OrderLineItem, OrderQuantity, `Shipping Date`, products.ProductSubcategoryKey,
	       ProductSKU, ProductName, ModelName, ProductDescription, ProductColor, ProductSize,
	       ProductStyle, ProductCost, ProductPrice
	FROM (frank_is.customers Inner join sales_2017 on frank_is.customers.customerKey
	    = Sales_2017.CustomerKey)
	INNER JOIN frank_is.products
	ON frank_is.products.productkey = sales_2017.productKey;
