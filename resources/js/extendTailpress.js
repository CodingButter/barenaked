module.exports = (tailpress) => {
  tailpress.sizeMapper = (sizeObjects) => {
    let result = {}

    sizeObjects.forEach(function ({ slug, size }) {
      result[slug] = size
    })

    return result
  }
  return tailpress
}
