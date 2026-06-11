# 4.1 Practitioner - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **4.1 Practitioner**

## Example Practitioner: 4.1 Practitioner

Profile: [CH Core Practitioner EPR](http://fhir.ch/ig/ch-core/7.0.0-ballot/StructureDefinition-ch-core-practitioner-epr.html)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html)/7601888888884

**active**: true

**name**: Allzeit Bereit 

**telecom**: ph: tel:+41.32.234.55.66(Work), fax: fax:+41.32.234.55.67(Work), [mailto:bereit@gruppenpraxis.ch](mailto:mailto:bereit@gruppenpraxis.ch), [http://www.gruppenpraxis.ch](http://www.gruppenpraxis.ch)

**address**: Doktorgasse 2 Musterhausen 8888 CH 



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "4-1-Practitioner",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner-epr"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601888888884"
  }],
  "active" : true,
  "name" : [{
    "family" : "Bereit",
    "given" : ["Allzeit"],
    "prefix" : ["Dr. med."]
  }],
  "telecom" : [{
    "system" : "phone",
    "value" : "tel:+41.32.234.55.66",
    "use" : "work"
  },
  {
    "system" : "fax",
    "value" : "fax:+41.32.234.55.67",
    "use" : "work"
  },
  {
    "system" : "email",
    "value" : "mailto:bereit@gruppenpraxis.ch",
    "use" : "work"
  },
  {
    "system" : "url",
    "value" : "http://www.gruppenpraxis.ch",
    "use" : "work"
  }],
  "address" : [{
    "type" : "physical",
    "line" : ["Doktorgasse 2"],
    "city" : "Musterhausen",
    "postalCode" : "8888",
    "country" : "CH"
  }]
}

```
