import requests

def tunnel_content(content, keyword):
    url = f"https://your-tunneling-service/{keyword}"
    response = requests.post(url, data={'content': content})
    if response.status_code == 200:
        print("Content sent successfully.")
    else:
        print("Error sending content:", response.text)
