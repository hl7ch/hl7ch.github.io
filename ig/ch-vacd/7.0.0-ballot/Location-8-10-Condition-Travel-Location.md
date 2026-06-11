# 8.10 Travel Location (TravelInformation) - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **8.10 Travel Location (TravelInformation)**

## Example Location: 8.10 Travel Location (TravelInformation)

Profile: [CH VACD Travel Location](StructureDefinition-ch-vacd-travel-location.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/7.1.0/NamingSystem-uri.html)/urn:uuid:373b5e89-5590-4216-8bce-78258ac8922e

**status**: Active

**name**: Mein Traumziel

**address**: PAN (temp)



## Resource Content

```json
{
  "resourceType" : "Location",
  "id" : "8-10-Condition-Travel-Location",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-travel-location"]
  },
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:373b5e89-5590-4216-8bce-78258ac8922e"
  }],
  "status" : "active",
  "name" : "Mein Traumziel",
  "address" : {
    "use" : "temp",
    "type" : "physical",
    "country" : "PAN",
    "_country" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-codedString",
        "valueCoding" : {
          "system" : "urn:iso:std:iso:3166",
          "code" : "PAN",
          "display" : "Panama"
        }
      }]
    }
  }
}

```
