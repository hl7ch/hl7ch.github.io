# Manufacturer Pfizer AG - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Manufacturer Pfizer AG**

## Organization: Manufacturer Pfizer AG

Profile: [CH Core Organization](http://fhir.ch/ig/ch-core/7.0.0-ballot/StructureDefinition-ch-core-organization.html)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html)/7601001010604

**name**: Pfizer AG

**telecom**: ph: tel:+41 800 562 825(Work), fax: fax:+41 44 583 07 00(Work), [mailto:customer.ch@pfizer.com](mailto:mailto:customer.ch@pfizer.com), [https://www.pfizer.ch](https://www.pfizer.ch)

**address**: Schärenmoosstrasse 99 Postfach Zürich ZH 8052 CH 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "TC-ORG-PFIZER",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601001010604"
  }],
  "name" : "Pfizer AG",
  "telecom" : [{
    "system" : "phone",
    "value" : "tel:+41 800 562 825",
    "use" : "work"
  },
  {
    "system" : "fax",
    "value" : "fax:+41 44 583 07 00",
    "use" : "work"
  },
  {
    "system" : "email",
    "value" : "mailto:customer.ch@pfizer.com",
    "use" : "work"
  },
  {
    "system" : "url",
    "value" : "https://www.pfizer.ch",
    "use" : "work"
  }],
  "address" : [{
    "line" : ["Schärenmoosstrasse 99", "Postfach"],
    "city" : "Zürich",
    "state" : "ZH",
    "postalCode" : "8052",
    "country" : "CH"
  }]
}

```
