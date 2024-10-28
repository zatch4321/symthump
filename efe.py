import requests

def search_wikipedia(query):
    url = "https://en.wikipedia.org/w/api.php"
    params = {
        "action": "query",
        "format": "json",
        "list": "search",
        "srsearch": query
    }
    response = requests.get(url, params=params)
    if response.status_code == 200:
        data = response.json()
        search_results = data["query"]["search"]
        return search_results
    else:
        print("Error:", response.status_code)

# Example usage
query = "heart"
results = search_wikipedia(query)
for result in results:
    print(result["title"])
    print(result["snippet"])
    print()
