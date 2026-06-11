# Manufacturer GlaxoSmithKline AG - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Manufacturer GlaxoSmithKline AG**

## Organization: Manufacturer GlaxoSmithKline AG

Profile: [CH Core Organization](http://fhir.ch/ig/ch-core/7.0.0-ballot/StructureDefinition-ch-core-organization.html)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html)/7601001000674

**name**: MSD Merck Sharp & Dohme AG

**telecom**: ph: tel:+41 58 618 30 30(Work), [mailto:msd.kundendienst@msd.com](mailto:mailto:msd.kundendienst@msd.com), [https://www.msd.ch](https://www.msd.ch)

**address**: Werftestrasse 4 Lucerne LU 6005 CH 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "TC-ORG-MSD",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601001000674"
  }],
  "name" : "MSD Merck Sharp & Dohme AG",
  "telecom" : [{
    "system" : "phone",
    "value" : "tel:+41 58 618 30 30",
    "use" : "work"
  },
  {
    "system" : "email",
    "value" : "mailto:msd.kundendienst@msd.com",
    "use" : "work"
  },
  {
    "system" : "url",
    "value" : "https://www.msd.ch",
    "use" : "work"
  }],
  "address" : [{
    "line" : ["Werftestrasse 4"],
    "city" : "Lucerne",
    "state" : "LU",
    "postalCode" : "6005",
    "country" : "CH"
  }]
}

```
